<?php

namespace App\Http\Controllers;

use App\Exports\ExportMarcom;
use App\Imports\ImportMarcom;
use Illuminate\Http\Request;
use App\Models\Marcom;
use App\Models\Province;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class MarcomController extends Controller
{
    public function marcom()
    {
        $marcom = Marcom::all();
        return view('dashboard.marcom', compact('marcom'));
    }

    public function addmarcom(){
        $provinces = Province::all();
        return view('marcom/daftar',compact('provinces'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'marcom_date' => 'required|date',
            'bizmatch_event_name' => 'required|string|max:255',
            'video_link' => 'nullable|string|max:255|url',
            'picture_link' => 'nullable|string|max:255|url',
            'content_category' => 'required|string|max:255',
            'allocation' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Marcom::create([
            'marcom_date' => $request->input('marcom_date'),
            'bizmatch_event_name' => $request->input('bizmatch_event_name'),
            'video_link' => $request->input('video_link'),
            'picture_link' => $request->input('picture_link'),
            'content_category' => $request->input('content_category'),
            'allocation' => $request->input('allocation'),
        ]);

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/marcom');
    }

    public function destroy($id)
    {
        $marcom = Marcom::findOrFail($id);
        $marcom->delete();
        return redirect()->route('marcom')->with('success', 'Data Marcom berhasil dihapus.');
    }

    public function detail($id)
    {
        $marcom = Marcom::findOrFail($id);
        return view('marcom.detail', compact(['marcom']));
    }

    public function edit($id)
    {
        $provinces = Province::all();
        $marcom = Marcom::findOrFail($id);
        return view('marcom.edit', compact(['marcom']), compact('provinces'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'marcom_date' => 'required|date',
            'bizmatch_event_name' => 'required|string|max:255',
            'video_link' => 'nullable|string|max:255|url',
            'picture_link' => 'nullable|string|max:255|url',
            'content_category' => 'required|string|max:255',
            'allocation' => 'required|string|max:255',
        ]);

        // Update data di database
        $marcom = Marcom::findOrFail($id);
        $marcom->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('marcom.detail', compact(['marcom']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportMarcom, "Marcom.xlsx");
    }

    public function importdata()
    {
        return view('marcom.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataMarcom', $namaFile);
        
        $namaFile && Excel::import(new ImportMarcom, public_path('/DataMarcom/'.$namaFile));
        return redirect('/dashboard/marcom');
    }

    public function exportPDF()
    {
        $data = Marcom::all();

        $pdf = Pdf::loadView('marcom.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('marcom_report.pdf');
    }
}
