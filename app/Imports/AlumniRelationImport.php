<?php

namespace App\Imports;

use App\Models\Alumni;
use App\Models\AlumniYear;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\PersistRelations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;
use PhpOffice\PhpSpreadsheet\IOFactory;

class AlumniRelationImport implements ToModel, PersistRelations, WithHeadingRow, WithSkipDuplicates
{
    protected $filePath;
    protected $year;


    public function __construct($filePath, $year)
    {
        $this->filePath = $filePath;
        $this->year = $year;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Ambil atau buat tahun alumni
        $alumniYear = AlumniYear::firstOrCreate(
            ['year' => $this->year],
            ['year' => $this->year]
        );

        // Simpan gambar dari Excel jika ada
        $photoPath = $this->extractPhoto($row);

        // Simpan data alumni
        $alumni = new Alumni([
            'name' => $row["name"],
            'photo' => $photoPath,
        ]);

        $alumni->save();

        // Kaitkan alumni dengan tahun
        $alumni->alumni_years()->attach($alumniYear->id);

        return $alumni;
    }

    /**
     * Extract photo from Excel and save it to storage.
     *
     * @param array $row
     * @return string|null
     */
    protected function extractPhoto(array $row)
    {
        $filePath = 'D:/GIT/sman10tangerang/storage/app/private/'. $this -> filePath;
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $drawings = $sheet->getDrawingCollection();

        foreach ($drawings as $drawing) {
            if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
                $coordinates = $drawing->getCoordinates();

                // Pastikan koordinat gambar cocok dengan baris data
                $cellRow = (string) preg_replace('/[^\d]/', '', $coordinates); // Ekstrak nomor baris

                $checkcell = 'A'.$cellRow;

                if ($sheet->getCell($checkcell)->getValue() === $row['name']) {
                    $imageContents = file_get_contents($drawing->getPath());
                    $filename = uniqid() . '.' . pathinfo($drawing->getPath(), PATHINFO_EXTENSION);
                    $imagePath = 'alumnigallery/' . $filename;

                    // Simpan gambar ke storage
                    Storage::disk('public')->put($imagePath, $imageContents);

                    return $imagePath;
                }
        }
    }

        return null;
    }
}
