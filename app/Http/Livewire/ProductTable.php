<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class ProductTable extends TableComponent
{

    public $header_view = 'product.table-header';

    public function query()
    {
        return Product::query()->where('admin_id', '=', Auth::id());
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Product Name')->searchable()->sortable(),
            Column::make('Style')->searchable()->sortable(),
            Column::make('Brand')->searchable()->sortable(),
            Column::make('Skus')->view('product.table-skus'),
            Column::make()->view('product.table-actions')
        ];
    }
}
