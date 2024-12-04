<?php

namespace App\Filament\Resources\LectureProfileResource\Pages;

use App\Filament\Resources\LectureProfileResource;
use App\Imports\LectureImport;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Maatwebsite\Excel\Facades\Excel;


class ListLectureProfiles extends ListRecords
{
    protected static string $resource = LectureProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('import')
            ->label('Import Lecture')
            ->icon('heroicon-o-document-arrow-down')
            ->modalHeading('Import Data Guru')
            ->modalSubheading('Silakan unggah file Excel untuk mengimpor data Guru.')
            ->form([
                FileUpload::make('file')
                    ->label('File Excel')
                    ->disk('local') // Disk penyimpanan sementara
                    ->directory('temp') // Direktori penyimpanan sementara
                    ->acceptedFileTypes([
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // .xlsx
                        'application/vnd.ms-excel', // .xls
                        'text/xml', // .xml
                        'application/xml', // Alternatif mime-type untuk .xml
                    ])
                    ->required(),
            ])
            ->action(function(array $data) {
                  // Ambil file yang diunggah
                  $filePath = $data['file'];

                //   dd($filePath);

                  // Proses impor menggunakan Laravel Excel
                  Excel::import(new LectureImport($filePath), $filePath);

                  // Hapus file setelah impor selesai
                  FacadesStorage::disk('local')->delete($filePath);

                  // Kirim notifikasi sukses
                  Notification::make()
                  ->title('Berhasil')
                  ->body('Data Berhasil Ditambahkan')
                  ->success()
                  ->send();
            })
        ];
    }
}
