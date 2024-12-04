<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryEventResource\Pages;
use App\Filament\Resources\GalleryEventResource\RelationManagers;
use App\Models\GalleryEvent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;

class GalleryEventResource extends Resource
{
    protected static ?string $model = GalleryEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Gallery Alumni";

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
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
                    Forms\Components\Select::make('angkatan')
                    ->required()
                    ->relationship("alumni_years", "year"),
                    Forms\Components\TextInput::make('event')
                        ->required()
                        ->maxLength(100),
                ])->columnSpan(4)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            ->filters([
                SelectFilter::make("Angkatan")
                -> relationship('alumni_years', 'year'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGalleryEvents::route('/'),
        ];
    }
}
