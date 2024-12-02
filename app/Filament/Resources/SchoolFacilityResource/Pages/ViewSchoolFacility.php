<?php

namespace App\Filament\Resources\SchoolFacilityResource\Pages;

use App\Filament\Resources\SchoolFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSchoolFacility extends ViewRecord
{
    protected static string $resource = SchoolFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
