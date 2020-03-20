<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InventoryController extends Controller
{
    //
    public function index()
    {
        return view('inventory.index');
    }

    public function edit($id)
    {
        $inventory = Inventory::where(['id' => $id])->first();
        return view('inventory.edit', compact( 'inventory'));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return Redirect::to('/inventory')
            ->with('success', 'Inventory deleted.');
    }
}
