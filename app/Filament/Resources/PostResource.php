<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    use Translatable;
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Контент';
    protected static ?string $navigationLabel = 'Новости';
    protected static ?int $navigationSort = 1;

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ru', 'uz', 'kaa'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Основная информация')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->columnSpanFull(),
                        TinyEditor::make('content')
                            ->label('Содержание')
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsVisibility('public')
                            ->fileAttachmentsDirectory('uploads')
                            ->profile('default|simple|full|minimal|none|custom')
                            ->columnSpanFull()
                            ->required(),
                    ]),
                Forms\Components\Section::make('Медиа и настройки')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Изображение')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->optimize('jpg')
                            ->directory('posts')
                            ->imageCropAspectRatio('16:9')
                            ->imageEditorAspectRatios(['16:9'])
                            ->required(),
                        Forms\Components\Toggle::make('published')
                            ->label('Опубликовано')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Фото')
                    ->circular()
                    ->size(50),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->wrap(),
                Tables\Columns\ToggleColumn::make('published')
                    ->label('Опубликовано'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('published')
                    ->label('Статус')
                    ->trueLabel('Опубликованные')
                    ->falseLabel('Черновики')
                    ->placeholder('Все'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
