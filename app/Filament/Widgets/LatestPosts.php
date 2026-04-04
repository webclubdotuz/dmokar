<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPosts extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Последние новости';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query()->latest('id')
            )
            ->defaultPaginationPageOption(5)
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Фото')
                    ->circular()
                    ->size(40),
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок')
                    ->limit(60),
                Tables\Columns\IconColumn::make('published')
                    ->label('Статус')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->paginated([5]);
    }
}
