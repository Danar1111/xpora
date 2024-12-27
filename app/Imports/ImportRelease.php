<?php

namespace App\Imports;

use App\Models\Release;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportRelease implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Release([
            'release_date' => is_numeric($row[0]) 
                ? Carbon::instance(Date::excelToDateTimeObject($row[0]))->format('Y-m-d')
                : Carbon::parse($row[0])->format('Y-m-d'),
            'event_category' => $row[1],
            'bizmatch_event_name' => $row[2],
            'media_name' => $row[3],
            'news_link' => $row[4],
        ]);
    }
}
