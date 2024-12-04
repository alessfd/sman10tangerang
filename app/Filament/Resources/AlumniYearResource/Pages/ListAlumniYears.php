<?php

namespace App\Filament\Resources\AlumniYearResource\Pages;

use App\Filament\Resources\AlumniYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlumniYears extends ListRecords
{
    protected static string $resource = AlumniYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
