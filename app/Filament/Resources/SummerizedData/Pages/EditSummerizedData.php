<?php

namespace App\Filament\Resources\SummerizedData\Pages;

use App\Filament\Resources\SummerizedData\SummarizedDataResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSummerizedData extends EditRecord
{
    protected static string $resource = SummarizedDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
