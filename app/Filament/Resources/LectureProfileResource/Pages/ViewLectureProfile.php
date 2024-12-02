<?php

namespace App\Filament\Resources\LectureProfileResource\Pages;

use App\Filament\Resources\LectureProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLectureProfile extends ViewRecord
{
    protected static string $resource = LectureProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
