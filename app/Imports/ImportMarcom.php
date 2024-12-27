<?php

namespace App\Imports;

use App\Models\Marcom;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ImportMarcom implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Marcom([
            'marcom_date' => is_numeric($row[0]) 
                ? Carbon::instance(Date::excelToDateTimeObject($row[0]))->format('Y-m-d')
                : Carbon::parse($row[0])->format('Y-m-d'),
            'bizmatch_event_name' => $row[1],
            'video_link' => $row[2],
            'picture_link' => $row[3],
            'content_category' => $row[4],
            'allocation' => $row[5],
        ]);
    }
}
