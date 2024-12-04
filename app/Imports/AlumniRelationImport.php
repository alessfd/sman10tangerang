<?php

namespace App\Imports;

use App\Models\Alumni;
use App\Models\AlumniYear;
use Maatwebsite\Excel\Concerns\PersistRelations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;

class AlumniRelationImport implements ToModel, PersistRelations, WithHeadingRow, WithSkipDuplicates
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $year;

    // Konstruktor untuk menerima data tambahan 'year'
    public function __construct($year)
    {
        $this->year = $year;
    }

    public function model(array $row)
    {
        $alumniYear = AlumniYear::firstOrCreate(
            ['year' => $this->year],
            ['year' => $this->year]
        );

        $alumni = new Alumni([
            'name' => $row["name"],
            'alumni_year_id' => $alumniYear->id,
        ]);

        $alumni->save();

        return $alumni;
    }
}
