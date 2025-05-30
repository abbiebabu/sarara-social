<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),                
                
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->required()
                        ->maxLength(15),
                
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('province')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('zip_code')
                    ->required()
                    ->maxLength(255), 
                
                Forms\Components\TextInput::make('street_address')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('street_address')
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->label('Full Name'),

                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),

                Tables\Columns\TextColumn::make('street_address')
                    ->label('Street Address'),
                
                Tables\Columns\TextColumn::make('city')
                    ->label('City'),

                Tables\Columns\TextColumn::make('province')
                    ->label('Province'),
                
                Tables\Columns\TextColumn::make('zip_code')
                    ->label('Zip Code'),
                
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
