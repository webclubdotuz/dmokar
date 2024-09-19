<?php

namespace App\Filament\Resources\TravelerResource\Pages;

use App\Filament\Resources\TravelerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTraveler extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TravelerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
