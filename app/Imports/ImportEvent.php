<?php

namespace App\Imports;

use App\Models\Event;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ImportEvent implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Event([
            'start_date' => is_numeric($row[0]) 
                ? Carbon::instance(Date::excelToDateTimeObject($row[0]))->format('Y-m-d')
                : Carbon::parse($row[0])->format('Y-m-d'),
            'document_no' => $row[1],
            'event_name' => $row[2],
            'region' => $row[3],
            'country' => $row[4],
            'city' => $row[5],
            'event_category' => $row[6],
            'business_sector' => $row[7],
            'product_name' => $row[8],
            'proposed_budget' => $row[9],
            'realized_budget' => $row[10],
            'budget_type' => $row[11],
            'event_document' => $row[12],
            'event_description' => $row[13],
        ]);
    }
}
