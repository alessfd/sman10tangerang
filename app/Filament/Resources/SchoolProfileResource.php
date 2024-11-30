<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolProfileResource\Pages;
use App\Filament\Resources\SchoolProfileResource\RelationManagers;
use App\Models\SchoolProfile;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchoolProfileResource extends Resource
{
    protected static ?string $model = SchoolProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return false;
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Section::make()
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(30),
                Forms\Components\TextInput::make('npsn')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(30),
                Forms\Components\TextInput::make('phone_number')
                ->tel()
                -> prefix('+62')
                -> maxlength(11)
                ->required(),
                Forms\Components\Repeater::make('visi')
                    ->simple(
                        Forms\Components\TextInput::make('value')
                            ->label('Visi')
                            ->required()
                            ->maxLength(2074),
                    )
                ->columnSpanFull()
                ->collapsed()
                ->minItems(1)
                ->reorderableWithButtons()
                ->addActionLabel('Tambah Visi')
                ->addActionAlignment(Alignment::Start),
                Forms\Components\Repeater::make("misi")
                    ->simple(

                            Forms\Components\TextInput::make('value')
                            ->required()
                            ->maxLength(2074),
                    )
                    ->collapsed()
                    ->minItems(1)
                    ->reorderableWithButtons()
                    ->addActionLabel('Tambah Misi')
                    ->addActionAlignment(Alignment::Start),
                Forms\Components\TextArea::make('address')
                ->required()
                ->autosize()
                ->maxLength(2074),
                Forms\Components\TextArea::make('description')
                ->required()
                ->autosize()
                ->maxLength(2074),
            ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->toggleable(isToggledHiddenByDefault:false),
                Tables\Columns\TextColumn::make('address')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('phone_number')
                    ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault:true),
                    Tables\Columns\TextColumn::make('visi')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('misi')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault:true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

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
            'index' => Pages\ListSchoolProfiles::route('/'),
            'view' => Pages\ViewSchoolProfile::route('/{record}'),
            'edit' => Pages\EditSchoolProfile::route('/{record}/edit'),
        ];
    }
}
