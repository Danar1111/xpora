<?php

namespace App\Imports;

use App\Models\Bizmatch;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBizmatch implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bizmatch([
            'event_name' => $row[0],
            'partner_event' => $row[1],
            'region_scope' => $row[2],
            'country' => $row[3],
            'city' => $row[4],
            'business_sector' => $row[5],
            'product_category' => $row[6],
            'umkm_name' => $row[6],
            'buyer_name' => $row[7],
            'progress' => $row[8],
            'result' => $row[9],
        ]);
    }
}
