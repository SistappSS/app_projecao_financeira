<?php

namespace App\Http\Controllers\WEB\Inventories\Inventory;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.inventories.inventories.inventory.inventory_index', 'inventory');
    }
}
