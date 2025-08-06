<?php

namespace App\Filament\Resources\SummerizedData;

use App\Filament\Resources\SummerizedData\Pages\CreateSummerizedData;
use App\Filament\Resources\SummerizedData\Pages\EditSummerizedData;
use App\Filament\Resources\SummerizedData\Pages\ListSummerizedData;
use App\Filament\Resources\SummerizedData\Schemas\SummerizedDataForm;
use App\Filament\Resources\SummerizedData\Tables\SummarizedDataTable;
use App\Models\SummarizedData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SummarizedDataResource extends Resource
{
    protected static ?string $model = SummarizedData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SummerizedDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SummarizedDataTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSummerizedData::route('/'),
            'create' => CreateSummerizedData::route('/create'),
            'edit' => EditSummerizedData::route('/{record}/edit'),
        ];
    }
}
