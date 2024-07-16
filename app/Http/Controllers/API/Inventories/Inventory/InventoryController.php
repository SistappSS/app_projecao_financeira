<?php

namespace App\Http\Controllers\API\Inventories\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventories\Inventories\StoreInventoryRequest;
use App\Models\Inventories\Inventories\Inventory;
use App\Models\Inventories\Products\Product;
use App\Traits\CrudResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    use CrudResponse;

    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index()
    {
        $inventory = $this->inventory->orderBy('created_at', 'desc')->get();

        $inventory->each(function($inventory) {
            $inventory->product;
            $inventory->user;
            $inventory->humansDate = Carbon::parse($inventory->created_at)->format('d/m/Y | H:i:s');
        });

        return $this->trait("get", $inventory);
    }

    public function store(StoreInventoryRequest $request)
    {
        $request->validated();

        $product = Product::find($request->product_id);

        if ($request->transaction_type === 'stock_out') {
            if ($product->qty == 0) {
                return response()->json([
                    'error' => 'O estoque está vazio. Não é possível retirar.'
                ], 422);
            }

            if ($request->qty > $product->qty) {
                return response()->json([
                    'error' => 'A quantidade máxima que você pode retirar é ' . $product->qty
                ], 422);
            }
        }

        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'description' => $request->description,
            'transaction_type' => $request->transaction_type
        ];

        return $this->storeMethod($this->inventory, $data);
    }
}
