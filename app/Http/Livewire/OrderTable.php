<?php

namespace App\Http\Livewire;

use App\Inventory;
use App\Order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class OrderTable extends TableComponent
{
    public function query()
    {
//        return Order::query();
        $orders = Order::query()->with(['product', 'inventory'])->whereHas('product', function(Builder $query) {
            $query->where('products.admin_id', '=', Auth::id());
        });

        return $orders;
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Customer', 'name')->searchable(),
            Column::make('Email', 'email'),
            Column::make('Product', 'product.product_name')->searchable()->sortable(),
            Column::make('Color', 'inventory.color'),
            Column::make('Size', 'inventory.size'),
            Column::make('Status', 'order_status'),
            Column::make('Total', 'total_cents')->view('order.table-total'),
            Column::make('Transaction ID', 'transaction_id')->searchable()->sortable(),
            Column::make()->view('order.table-actions')

        ];
    }
}
