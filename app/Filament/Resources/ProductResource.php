<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use App\Enums\Status;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Section;
use Illuminate\Contracts\View\View;
use Filament\Tables\Filters\SelectFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationLabel = 'Produtos';

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-cube';
    }

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Informações do Produto')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nome')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Descrição')
                            ->maxLength(65535)
                            ->rows(3),
                        Forms\Components\TextInput::make('price')
                            ->label('Preço')
                            ->numeric()
                            ->required()
                            ->minValue(0),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options(Status::options())
                            ->required(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Preço')
                    ->money('BRL', true)
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Filtrar por Status')
                    ->options(\App\Enums\Status::class) 
                    ->placeholder('Todos os Status')
                    ->attribute('status'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->label('Excluir'),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public function render(): View
    {
        return view('livewire.product-search');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
