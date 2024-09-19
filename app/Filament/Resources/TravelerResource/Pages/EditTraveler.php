<?php

namespace App\Filament\Resources\TravelerResource\Pages;

use App\Filament\Resources\TravelerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTraveler extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = TravelerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
