<?php

namespace App\Filament\Resources\AlumniYearResource\Pages;

use App\Filament\Resources\AlumniYearResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlumniYear extends EditRecord
{
    protected static string $resource = AlumniYearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
