<?php

namespace App\Filament\Resources\WhatToSeeResource\Pages;

use App\Filament\Resources\WhatToSeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhatToSee extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = WhatToSeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
