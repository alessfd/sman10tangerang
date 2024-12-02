<?php

namespace App\Filament\Resources\GalleryEventResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventRelationManager extends RelationManager
{
    protected static string $relationship = 'gallery_events';


    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\FileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->disk('public')
                    ->reorderable()
                    ->directory('alumnievent')
                    ->imageEditor(),

                Forms\Components\TextArea::make('description')
                    ->required()
                    ->maxLength(1000),
            ])->columnSpan(8),
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('event')
                    ->required()
                    ->maxLength(100),
            ])->columnSpan(4)
        ])->columns(12);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('event')
                -> searchable(),
                Tables\Columns\ImageColumn::make('first_image')
                ->label('First Image')
                ->getStateUsing(function ($record) {
                    return $record->images[0] ?? null;
                }),
                Tables\Columns\TextColumn::make('description')
                    ->toggleable(),
                Tables\Columns\TextColumn::make("alumni_years.year")
                    ->sortable()
                    ->label("Angkatan"),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
