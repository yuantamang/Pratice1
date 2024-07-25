<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CResource\Pages;
use App\Filament\Resources\CResource\RelationManagers;
use App\Models\C;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CResource extends Resource
{
    protected static ?string $model = C::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';
    protected static ?string $navigationGroup ="Glitch";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make("image")
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")
                       ->searchable(),
                Tables\Columns\TextColumn::make("name")
                       ->searchable(),
                Tables\Columns\ImageColumn::make("image")
                       ->circular(),
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
            'index' => Pages\ListCS::route('/'),
            'create' => Pages\CreateC::route('/create'),
            'view' => Pages\ViewC::route('/{record}'),
            'edit' => Pages\EditC::route('/{record}/edit'),
        ];
    }
}
