<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\RelationManagers\AlumnisRelationManager;
use App\Filament\Resources\AlumniYearResource\Pages;
use App\Filament\Resources\AlumniYearResource\RelationManagers;
use App\Filament\Resources\GalleryEventResource\RelationManagers\EventRelationManager;
use App\Models\AlumniYear;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlumniYearResource extends Resource
{
    protected static ?string $model = AlumniYear::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Gallery Alumni';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('year')
                    ->label('Year')
                    -> numeric()
                    ->required()
                    ->minValue(2000)
                    ->maxValue(now()->format('Y'))
                    ->unique(),
                Forms\Components\FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->imageEditor()
                    ->directory('alumniyearthumbnail'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            AlumnisRelationManager::class,
            EventRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumniYears::route('/'),
            'create' => Pages\CreateAlumniYear::route('/create'),
            'view' => Pages\ViewAlumniYear::route('/{record}'),
            'edit' => Pages\EditAlumniYear::route('/{record}/edit'),
        ];
    }
}
