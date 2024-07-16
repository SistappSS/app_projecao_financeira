<?php

namespace App\Observers;

use App\Models\Inventories\Inventories\Inventory;
use App\Models\Inventories\Products\Product;
use Carbon\Carbon;

class InventoryObserver
{
    /**
     * Handle the Inventory "created" event.
     */
    public function created(Inventory $inventory): void
    {
        $type = $inventory->transaction_type;
        $product = Product::where('id', $inventory->product_id)->first();
        $oldQty = $product->qty;


        switch ($type) {
            case 'stock_in':
                $newQty = $oldQty + $inventory->qty;

                break;

            case 'stock_out':
                $newQty = $oldQty - $inventory->qty;

                if($newQty < 0) {
                    $newQty = 0;
                }

                break;
        }

        $product->update([
           'qty' => $newQty,
           'updated_at' => Carbon::now()
        ]);
    }
}
