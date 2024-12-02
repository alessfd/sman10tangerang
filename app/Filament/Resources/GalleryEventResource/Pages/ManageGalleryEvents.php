<?php

namespace App\Filament\Resources\GalleryEventResource\Pages;

use App\Filament\Resources\GalleryEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;


class ManageGalleryEvents extends ManageRecords
{
    protected static string $resource = GalleryEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
