<?php

namespace App\Imports;

use App\Models\Umkm;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportUmkm implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $umkm = Umkm::orderBy('id',"asc")->get();
        return $umkm; 
    }
}
