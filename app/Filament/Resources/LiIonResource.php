<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LiIonResource\Pages;
use App\Filament\Resources\LiIonResource\RelationManagers;
use App\Models\LiIon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LiIonResource extends Resource
{
    protected static ?string $model = LiIon::class;

    protected static ?string $navigationIcon = 'heroicon-o-battery-50';
    protected static ?string $navigationGroup ="Batteries";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('categorey_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('component_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('battery_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categorey_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('component_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('battery_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListLiIons::route('/'),
            'create' => Pages\CreateLiIon::route('/create'),
            'view' => Pages\ViewLiIon::route('/{record}'),
            'edit' => Pages\EditLiIon::route('/{record}/edit'),
        ];
    }
}
