<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;


class OrdersResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = ' Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Order Details')
                ->description('Fill the order details in.')
                ->schema([
                    Forms\Components\Select::make('customer_id')
                    ->label('Customer-Name')
                    ->relationship('Customer', 'Customer_name') 
                    ->required(),
                    Forms\Components\TextInput::make('order_number')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Forms\Components\DatePicker::make('order_date')
                        ->required(),
                    Forms\Components\TextInput::make('status')
                        ->required(),
                    Forms\Components\TextInput::make('total_amount')
                        ->label('Total Amount ( $ )')
                        ->required()
                        ->numeric()
                        ->step(0.01),
                  
                ]),

               
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('Customer.Customer_name')->label('Customer Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_amount')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('F j, Y, g:i a')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('F j, Y, g:i a')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()
                ->successNotificationTitle('Order successfully deleted..')
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
