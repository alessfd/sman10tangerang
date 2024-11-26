<?php

namespace App\Filament\Resources\AlumniYearResource\Pages;

use App\Filament\Resources\AlumniYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAlumniYears extends ManageRecords
{
    protected static string $resource = AlumniYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
