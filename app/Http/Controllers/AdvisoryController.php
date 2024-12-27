<?php

namespace App\Http\Controllers;

use App\Exports\ExportAdvisory;
use App\Imports\ImportAdvisory;
use App\Models\Advisory;
use App\Models\Province;
use App\Models\Regency;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdvisoryController extends Controller
{
    public function  advisory(){
        $advisory = Advisory::all();
        return view('dashboard.advisory', compact('advisory'));
    }

    public function addadvisory(){
        $provinces = Province::all();
        $regencies = Regency::all();
        return view('advisory/daftar',compact('provinces', 'regencies'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'training_date' => 'required|date',
            'proposal_no' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'training_name' => 'required|string|max:255',
            'training_description' => 'nullable|string',
            'internal_partner' => 'nullable|string|max:255',
            'instructor_name' => 'nullable|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'training_type' => 'required|string|max:255',
            'training_level' => 'required|string|max:255',
            'participant_count' => 'required|integer',
            'proposed_budget' => 'required|numeric',
            'budget_type' => 'required|string|max:255',
            'advisory_document' => 'nullable|string|max:255',
        ]);

        // Simpan data ke database
        Advisory::create($request->all());

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/advisory');
    }

    public function destroy($id)
    {
        $advisory = Advisory::findOrFail($id);
        $advisory->delete();
        return redirect()->route('advisory')->with('success', 'Data advisory berhasil dihapus.');
    }

    public function detail($id)
    {
        $advisory = Advisory::findOrFail($id);
        return view('advisory.detail', compact(['advisory']));
    }

    public function edit($id)
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $advisory = Advisory::findOrFail($id);
        $advisory->proposed_budget = floor($advisory->proposed_budget);
        return view('advisory.edit', compact(['advisory']), compact('provinces', 'regencies'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'training_date' => 'required|date',
            'proposal_no' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'training_name' => 'required|string|max:255',
            'training_description' => 'nullable|string',
            'internal_partner' => 'nullable|string|max:255',
            'instructor_name' => 'nullable|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'training_type' => 'required|string|max:255',
            'training_level' => 'required|string|max:255',
            'participant_count' => 'required|integer',
            'proposed_budget' => 'required|numeric',
            'budget_type' => 'required|string|max:255',
            'advisory_document' => 'nullable|string|max:255',
        ]);

        // Update data di database
        $advisory = Advisory::findOrFail($id);
        $advisory->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('advisory.detail', compact(['advisory']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportAdvisory, "Advisory.xlsx");
    }

    public function importdata()
    {
        return view('advisory.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataAdvisory', $namaFile);
        
        $namaFile && Excel::import(new ImportAdvisory, public_path('/DataAdvisory/'.$namaFile));
        return redirect('/dashboard/advisory');
    }

    public function exportPDF()
    {
        $data = Advisory::all();

        $pdf = Pdf::loadView('advisory.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('advisory_report.pdf');
    }
}
