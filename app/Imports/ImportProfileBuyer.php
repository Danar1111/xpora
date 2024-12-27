<?php

namespace App\Imports;

use App\Models\ProfileBuyer;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProfileBuyer implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProfileBuyer([
            'event_id' => $row[0],
            'event_name' => $row[1],
            'event_location' => $row[2],
            'company_name' => $row[3],
            'country' => $row[4],
            'city' => $row[5],
            'sector' => $row[6],
            'interested_product' => $row[7],
            'pic_name' => $row[8],
            'phone_number' => $row[9],
            'email' => $row[10],
            'website' => $row[11],
            'address' => $row[12],
        ]);
    }
}
