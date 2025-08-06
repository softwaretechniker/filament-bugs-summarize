<?php

namespace App\Filament\Resources\SummerizedData\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SummerizedDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('value')
                    ->required()
                    ->numeric(),
            ]);
    }
}
