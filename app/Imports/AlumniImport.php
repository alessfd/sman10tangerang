<?php

namespace App\Imports;

use App\Models\Alumni;
use App\Models\AlumniYear;
use Maatwebsite\Excel\Concerns\PersistRelations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;

class AlumniImport implements ToModel, PersistRelations, WithHeadingRow, WithSkipDuplicates
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $alumniYear = AlumniYear::firstOrCreate(
            ['year' => $row['angkatan']],
            ['year' => $row['angkatan']]
        );

        $alumni = new Alumni([
            'name' => $row["name"],
        ]);

        $alumni->save();


        $alumni->alumni_years()->attach($alumniYear->id);

        return $alumni;
    }
}
