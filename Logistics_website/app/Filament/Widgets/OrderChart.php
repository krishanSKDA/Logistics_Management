<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;
use App\Enums\OrderStatusEnum;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Chart;


class OrderChart extends ChartWidget
{
    protected static ?string $heading = 'Order';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = Order::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => array_values($data)
                ]
            ],
            'labels' => array_map(function ($status) {
                return OrderStatusEnum::from($status)->label(); 
            }, array_keys($data))
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
