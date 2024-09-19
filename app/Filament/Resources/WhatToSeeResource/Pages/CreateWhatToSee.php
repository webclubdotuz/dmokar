<?php

namespace App\Filament\Resources\WhatToSeeResource\Pages;

use App\Filament\Resources\WhatToSeeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWhatToSee extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = WhatToSeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
