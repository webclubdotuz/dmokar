<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TravelerResource\Pages;
use App\Filament\Resources\TravelerResource\RelationManagers;
use App\Models\Traveler;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

use Filament\Resources\Concerns\Translatable;

class TravelerResource extends Resource
{

    use Translatable;

    protected static ?string $model = Traveler::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ru', 'uz', 'kaa'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('country')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('uzs'),
                Forms\Components\FileUpload::make('image')
                ->image()
                ->imageEditor('cropper')
                ->imageResizeMode('cover')
                ->optimize('jpg')
                ->directory('traveler')
                ->imageCropAspectRatio('16:9')
                ->imageEditorAspectRatios([
                    '16:9',
                ])->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListTravelers::route('/'),
            'create' => Pages\CreateTraveler::route('/create'),
            'edit' => Pages\EditTraveler::route('/{record}/edit'),
        ];
    }
}
