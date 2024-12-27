<?php

namespace App\Http\Controllers;

use App\Exports\ExportRelease;
use App\Imports\ImportRelease;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Release;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class ReleaseController extends Controller
{
    public function release(){
        $release = Release::all();
        return view('dashboard.release', compact(['release']));
    }

    public function addrelease(){
        $provinces = Province::all();
        return view('release/daftar',compact('provinces'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'release_date' => 'required|date',
            'event_category' => 'required|string|max:255',
            'bizmatch_event_name' => 'required|string|max:255',
            'media_name' => 'required|string|max:255',
            'news_link' => 'required|string|max:255|url',
        ]);

        // Simpan data ke database
        Release::create([
            'release_date' => $request->input('release_date'),
            'event_category' => $request->input('event_category'),
            'bizmatch_event_name' => $request->input('bizmatch_event_name'),
            'media_name' => $request->input('media_name'),
            'news_link' => $request->input('news_link'),
        ]);

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/release');
    }

    public function destroy($id)
    {
        $release = Release::findOrFail($id);
        $release->delete();
        return redirect()->route('release')->with('success', 'Data berhasil dihapus.');
    }

    public function detail($id)
    {
        $release = Release::findOrFail($id);
        return view('release.detail', compact(['release']));
    }

    public function edit($id)
    {
        $provinces = Province::all();
        $release = Release::findOrFail($id);
        return view('release.edit', compact(['release']), compact('provinces'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'release_date' => 'required|date',
            'event_category' => 'required|string|max:255',
            'bizmatch_event_name' => 'required|string|max:255',
            'media_name' => 'required|string|max:255',
            'news_link' => 'required|string|max:255|url',
        ]);

        // Update data di database
        $release = Release::findOrFail($id);
        $release->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('release.detail', compact(['release']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportRelease, "Release.xlsx");
    }

    public function importdata()
    {
        return view('release.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataRelease', $namaFile);
        
        $namaFile && Excel::import(new ImportRelease, public_path('/DataRelease/'.$namaFile));
        return redirect('/dashboard/release');
    }
    
    public function exportPDF()
    {
        $data = Release::all();

        $pdf = Pdf::loadView('release.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('release_report.pdf');
    }
}
