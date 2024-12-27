<?php

namespace App\Http\Controllers;

use App\Exports\ExportEvent;
use App\Imports\ImportEvent;
use App\Models\Country;
use App\Models\Event;
use App\Models\Regency;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    public function event()
    {
        $event = Event::all();
        return view('dashboard.event', compact('event'));
    }

    public function addevent(){
        $countries = Country::all();
        $regencies = Regency::all();
        return view('event/daftar',compact('countries'), compact('regencies'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'start_date' => 'required|date',
            'document_no' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'event_category' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'proposed_budget' => 'required|numeric',
            'realized_budget' => 'required|numeric',
            'budget_type' => 'required|string|max:255',
            'event_document' => 'nullable|string|max:255',
            'event_description' => 'nullable|string',
        ]);

        // Simpan data ke database
        Event::create($request->all());

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/event');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event')->with('success', 'Data event berhasil dihapus.');
    }

    public function detail($id)
    {
        $event = Event::findOrFail($id);
        return view('event.detail', compact(['event']));
    }

    public function edit($id)
    {
        $regencies = Regency::all();
        $countries = Country::all();
        $event = Event::findOrFail($id);
        $event->proposed_budget = floor($event->proposed_budget);
        $event->realized_budget = floor($event->realized_budget);
        return view('event.edit', compact(['event']), compact('countries', 'regencies'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'start_date' => 'required|date',
            'document_no' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'event_category' => 'required|string|max:255',
            'business_sector' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'proposed_budget' => 'required|numeric',
            'realized_budget' => 'required|numeric',
            'budget_type' => 'required|string|max:255',
            'event_document' => 'nullable|string|max:255',
            'event_description' => 'nullable|string',
        ]);

        // Update data di database
        $event = Event::findOrFail($id);
        $event->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('event.detail', compact(['event']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportEvent, "Event.xlsx");
    }

    public function importdata()
    {
        return view('event.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataEvent', $namaFile);
        
        $namaFile && Excel::import(new ImportEvent, public_path('/DataEvent/'.$namaFile));
        return redirect('/dashboard/event');
    }

    public function exportPDF()
    {
        $data = Event::all();

        $pdf = Pdf::loadView('event.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('event_report.pdf');
    }
}
