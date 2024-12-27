<?php

namespace App\Http\Controllers;

use App\Exports\ExportProfileBuyer;
use App\Imports\ImportProfileBuyer;
use App\Models\Country;
use App\Models\ProfileBuyer;
use App\Models\Regency;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class ProfileBuyerController extends Controller
{
    public function profilebuyer(){
        $profileBuyer = ProfileBuyer::all();
        return view('dashboard.profilebuyer', compact('profileBuyer'));
    }

    public function addprofilebuyer(){
        $countries = Country::all();
        $regencies = Regency::all();
        return view('profilebuyer/daftar',compact('countries', 'regencies'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'event_id' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'event_location' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'interested_product' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        // Simpan data ke database
        ProfileBuyer::create($request->all());

        // Redirect atau kembalikan response sukses
        return redirect('/dashboard/profilebuyer');
    }

    public function destroy($id)
    {
        $profileBuyer = ProfileBuyer::findOrFail($id);
        $profileBuyer->delete();
        return redirect()->route('profilebuyer')->with('success', 'Data profile buyer berhasil dihapus.');
    }

    public function detail($id)
    {
        $profileBuyer = ProfileBuyer::findOrFail($id);
        return view('profilebuyer.detail', compact(['profileBuyer']));
    }

    public function edit($id)
    {
        $countries = Country::all();
        $regencies = Regency::all();
        $profileBuyer = ProfileBuyer::findOrFail($id);
        return view('profilebuyer.edit', compact(['profileBuyer']), compact('countries', 'regencies'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'event_id' => 'required|string|max:255',
            'event_name' => 'required|string|max:255',
            'event_location' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'interested_product' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        // Update data di database
        $profileBuyer = ProfileBuyer::findOrFail($id);
        $profileBuyer->update($request->all());

        // Redirect atau kembalikan response sukses
        return view('profilebuyer.detail', compact(['profileBuyer']));
    }

    public function export_excel()
    {
        return Excel::download(new ExportProfileBuyer, "ProfileBuyer.xlsx");
    }

    public function importdata()
    {
        return view('profilebuyer.import');
    }
    
    public function import_proses(Request $request){
        $file = $request->file('file');
        $namaFile = ($file && $file->isValid()) ? Carbon::now()->timestamp . '_' . $file->getClientOriginalName() : null;
        // dd($request->file);

        $namaFile && $file->move('DataProfileBuyer', $namaFile);
        
        $namaFile && Excel::import(new ImportProfileBuyer, public_path('/DataProfileBuyer/'.$namaFile));
        return redirect('/dashboard/profilebuyer');
    }

    public function exportPDF()
    {
        $data = ProfileBuyer::all();

        $pdf = Pdf::loadView('profilebuyer.export_pdf', compact('data'))
            ->setPaper('a4', 'landscape')
            ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('profile_buyer_report.pdf');
    }
}
