<?php

namespace App\Imports;

use App\Models\LectureProfile;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\PersistRelations;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LectureImport implements ToModel, PersistRelations, WithHeadingRow, WithSkipDuplicates
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }



    public function model(array $row)
    {


         $photoPath = $this->extractPhoto($row);


        $lecture =  new LectureProfile([
              'name' => $row["name"],
                'photo' => $photoPath,
                'email' => $row["email"] ?? null,
                'phone_number' => $row["phonenumber"] ?? null,
                'address' => $row['alamat'] ?? null,
                'gender' => $row['gender'] ?? null,
                'dob' => $row['birthdate'] ?? null,
                'jabatan' => $row['jabatan'] ??null,
        ]);

        $lecture ->save();

        return $lecture;
    }

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
                    $imagePath = 'photolecture/' . $filename;

                    // Simpan gambar ke storage
                    Storage::disk('public')->put($imagePath, $imageContents);

                    return $imagePath;
                }
        }
    }

        return null;
    }
}
