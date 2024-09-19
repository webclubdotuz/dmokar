<?php

namespace App\Filament\Resources\TravelerResource\Pages;

use App\Filament\Resources\TravelerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTravelers extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = TravelerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
