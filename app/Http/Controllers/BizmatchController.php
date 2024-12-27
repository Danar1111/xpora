<?php

namespace App\Http\Controllers;

use App\Exports\ExportBizmatch;
use App\Imports\ImportBizmatch;
use App\Models\Bizmatch;
use App\Models\Country;
use App\Models\Regency;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class BizmatchController extends Controller
{
    public function bizmatch()
    {
        $bizmatch = Bizmatch::all();
        return view('dashboard.bizmatch', compact('bizmatch'));
    }

    public function addbizmatch(){
        $countries = Country::all();
        $regencies = Regency::all();
        return view('bizmatch/daftar',compact('countries', 'regencies'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'event_name' => 'required|string|max:255',
            'partner_event' => 'nullable|string|max:255',
            'region_scope' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'umkm_name' => 'required|string|max:255',
            'buyer_name' => 'required|string|max:255',
            'progress' => 'required|string|max:255',
            'result' => 'nullable|string|max:255',
        ]);

        // Simpan data ke database
        Bizmatch::create($request->all());

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/bizmatch');
    }

    public function destroy($id)
    {
        $bizmatch = Bizmatch::findOrFail($id);
        $bizmatch->delete();
        return redirect()->route('bizmatch')->with('success', 'Data bizmatch berhasil dihapus.');
    }

    public function detail($id)
    {
        $bizmatch = Bizmatch::findOrFail($id);
        return view('bizmatch.detail', compact(['bizmatch']));
    }

    public function edit($id)
    {
        $countries = Country::all();
        $regencies = Regency::all();
        $bizmatch = Bizmatch::findOrFail($id);
        return view('bizmatch.edit', compact(['bizmatch']), compact('countries', 'regencies'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'event_name' => 'required|string|max:255',
            'partner_event' => 'nullable|string|max:255',
            'region_scope' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'umkm_name' => 'required|string|max:255',
            'buyer_name' => 'required|string|max:255',
            'progress' => 'required|string|max:255',
            'result' => 'nullable|string|max:255',
        ]);

        // Update data di database
        $bizmatch = Bizmatch::findOrFail($id);
        $bizmatch->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('bizmatch.detail', compact(['bizmatch']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportBizmatch, "Bizmatch.xlsx");
    }

    public function importdata()
    {
        return view('bizmatch.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataBizmatch', $namaFile);
        
        $namaFile && Excel::import(new ImportBizmatch, public_path('/DataBizmatch/'.$namaFile));
        return redirect('/dashboard/bizmatch');
    }

    public function exportPDF()
    {
        $data = Bizmatch::all();

        $pdf = Pdf::loadView('bizmatch.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('bizmatch_report.pdf');
    }
}
