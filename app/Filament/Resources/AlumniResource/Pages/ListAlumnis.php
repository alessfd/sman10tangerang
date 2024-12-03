<?php

namespace App\Filament\Resources\AlumniResource\Pages;

use App\Filament\Resources\AlumniResource;
use App\Imports\AlumniImport;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Maatwebsite\Excel\Facades\Excel;

class ListAlumnis extends ListRecords
{
    protected static string $resource = AlumniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('import')
            ->label('Import Alumni')
            ->icon('heroicon-o-document-arrow-down')
            ->modalHeading('Import Alumni Data')
            ->modalSubheading('Silakan unggah file Excel untuk mengimpor data alumni.')
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
                  Excel::import(new AlumniImport, $filePath);

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
