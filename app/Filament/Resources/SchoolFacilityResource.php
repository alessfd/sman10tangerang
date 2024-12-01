<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolFacilityResource\Pages;
use App\Filament\Resources\SchoolFacilityResource\RelationManagers;
use App\Models\SchoolFacility;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchoolFacilityResource extends Resource
{
    protected static ?string $model = SchoolFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Grid::make(2)
                            ->schema(
                            [
                                Forms\Components\TextInput::make('location')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('capacity')
                                    ->numeric()
                                    ->default(null),
                            ]
                        ),
                        Forms\Components\Textarea::make('description')
                            ->columnSpanFull(),
                        Forms\Components\Select::make('status')
                            ->options([
                                'aktif' => 'Aktif',
                                'non-aktif' => 'Non Aktif',
                            ])
                            ->required(),
                    ])->columnSpan(8),
                    Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make("images")
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('Facility'),
                    ])->columnSpan(4)
            ]) ->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make("images"),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
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
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchoolFacilities::route('/'),
            'create' => Pages\CreateSchoolFacility::route('/create'),
            'view' => Pages\ViewSchoolFacility::route('/{record}'),
            'edit' => Pages\EditSchoolFacility::route('/{record}/edit'),
        ];
    }
}
