<?php

namespace App\Filament\Resources\SummerizedData\Pages;

use App\Filament\Resources\SummerizedData\SummarizedDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSummerizedData extends ListRecords
{
    protected static string $resource = SummarizedDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
