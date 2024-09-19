<?php

namespace App\Filament\Resources\WhatToSeeResource\Pages;

use App\Filament\Resources\WhatToSeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhatToSees extends ListRecords
{

    use ListRecords\Concerns\Translatable;
    protected static string $resource = WhatToSeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
