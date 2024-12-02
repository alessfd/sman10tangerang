<?php

namespace App\Filament\Resources\AlumniYearResource\Pages;

use App\Filament\Resources\AlumniYearResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAlumniYear extends ViewRecord
{
    protected static string $resource = AlumniYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
