<?php

namespace App\Filament\Resources\AlumniResource\RelationManagers;

use App\Imports\AlumniRelationImport;
use App\Models\AlumniYear;
use Filament\Tables\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Maatwebsite\Excel\Facades\Excel;

class AlumnisRelationManager extends RelationManager
{
    protected static string $relationship = 'alumnis';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->disk('public')
                            ->directory('alumnigallery'),
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alumni_years.year')
                    ->label("Angkatan")
                    ->sortable(),
                Tables\Columns\ImageColumn::make('photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([

            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
                    $year = $this->ownerRecord->getYear();

                    // Jika Anda ingin mengakses 'alumniYear' yang terkait, pastikan Anda memiliki relasi yang tepat
                    // dump($this -> ownerRecord -> getYear());

                    // Memastikan bahwa relasi alumniYear ada dan mengambil tahun
                    // if ($alumniYear) {
                    //     dump($alumniYear->year); // Menampilkan tahun alumni
                    // } else {
                    //     dump('No alumni year found');
                    // }
                    // Proses impor menggunakan Laravel Excel
                    Excel::import(new AlumniRelationImport($filePath,$year) , $filePath);

                    // Hapus file setelah impor selesai
                    FacadesStorage::disk('local')->delete($filePath);

                    // Kirim notifikasi sukses
                    Notification::make()
                    ->title('Berhasil')
                    ->body('Data Berhasil Ditambahkan')
                    ->success()
                    ->send();
                })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }



}
