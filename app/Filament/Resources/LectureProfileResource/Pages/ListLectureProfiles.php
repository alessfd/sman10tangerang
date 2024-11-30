<?php

namespace App\Filament\Resources\LectureProfileResource\Pages;

use App\Filament\Resources\LectureProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLectureProfiles extends ListRecords
{
    protected static string $resource = LectureProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
