<?php

namespace App\Imports;

use App\Models\Advisory;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ImportAdvisory implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Advisory([
            'training_date' => is_numeric($row[0]) 
                ? Carbon::instance(Date::excelToDateTimeObject($row[0]))->format('Y-m-d')
                : Carbon::parse($row[0])->format('Y-m-d'),
            'proposal_no' => $row[1],
            'pic_name' => $row[2],
            'training_name' => $row[3],
            'training_description' => $row[4],
            'internal_partner' => $row[5],
            'instructor_name' => $row[6],
            'province' => $row[7],
            'city' => $row[8],
            'training_type' => $row[9],
            'training_level' => $row[10],
            'participant_count' => $row[11],
            'proposed_budget' => $row[12],
            'budget_type' => $row[13],
            'advisory_document' => $row[14],
        ]);
    }
}
