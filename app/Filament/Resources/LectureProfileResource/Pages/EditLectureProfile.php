<?php

namespace App\Filament\Resources\LectureProfileResource\Pages;

use App\Filament\Resources\LectureProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLectureProfile extends EditRecord
{
    protected static string $resource = LectureProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
