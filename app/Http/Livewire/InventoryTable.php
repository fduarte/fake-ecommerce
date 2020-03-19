<?php

namespace App\Http\Livewire;

use App\Inventory;
use Illuminate\Support\Facades\Auth;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;
use Illuminate\Database\Eloquent\Builder;

class InventoryTable extends TableComponent
{
    public $header_view = 'inventory.table-header';

    public $footer_view = 'inventory.table-footer';

    public $count;

    public function query()
    {
        $inventory = Inventory::query()->with('product')->whereHas('product', function(Builder $query) {
            $query->where('products.admin_id', '=', Auth::id());
        });

        $this->count = $inventory->count();

        return $inventory;

    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Product', 'product.product_name')->sortable(),
            Column::make('SKU', 'sku')->searchable()->sortable(),
            Column::make('QTY', 'quantity')->sortable(),
            Column::make('Color', 'color')->sortable(),
            Column::make('Size', 'size')->sortable(),
            Column::make('Price', 'price_cents')->view('inventory.table-price'),
            Column::make('Cost', 'cost_cents')->view('inventory.table-cost'),
            Column::make()->view('inventory.table-actions')
        ];
    }

    public function getCount()
    {
        return $this->count;
    }
}
