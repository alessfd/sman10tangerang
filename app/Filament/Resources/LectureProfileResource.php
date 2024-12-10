<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LectureProfileResource\Pages;
use App\Filament\Resources\LectureProfileResource\RelationManagers;
use App\Models\LectureProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LectureProfileResource extends Resource
{
    protected static ?string $model = LectureProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Profile';

    protected static ?string $navigationLabel = "Teacher Profile";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(50),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->maxLength(50),
                    Forms\Components\TextInput::make('phone_number')
                        ->tel()
                        -> prefix('+62')
                        ->maxLength(15)
                        ->default(null),
                    Forms\Components\Textarea::make('address')
                        ->columnSpanFull(),
                    Forms\Components\Select::make('gender')
                        ->options([
                            'M' => 'Laki-Laki',
                            'F' => 'Perempuan',
                        ])
                        ->required(),
                    Forms\Components\DatePicker::make('dob')
                        ->label("Tanggal Lahir"),
                    Forms\Components\TextInput::make('jabatan')
                        ->maxLength(30)
                        ->default(null),
                ]) ->columnSpan(8),

                Forms\Components\Section::make()
                ->schema(
                    [
                        Forms\Components\FileUpload::make('photo')
                        ->image()
                        ->disk('public')
                        ->directory('teacher_photos')
                        ->default(null)
                        ->imageEditor()
                        ->avatar(),
                    ]
                ) ->columnSpan(4)

            ])
            ->columns(12);;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('dob')
                    ->label("Tanggal Lahir")
                    ->date()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\ImageColumn::make('photo')
                    ->circular(),
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
            'index' => Pages\ListLectureProfiles::route('/'),
            'create' => Pages\CreateLectureProfile::route('/create'),
            'view' => Pages\ViewLectureProfile::route('/{record}'),
            'edit' => Pages\EditLectureProfile::route('/{record}/edit'),
        ];
    }
}
