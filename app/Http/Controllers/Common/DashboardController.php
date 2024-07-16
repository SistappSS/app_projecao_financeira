<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Inventories\Inventories\Inventory;
use App\Models\Inventories\Products\Product;
use App\Models\PaymentMonthly;
use App\Models\SalesAndMarketing\Services\ContractedService;
use App\Models\TransactionPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
//        $lastMonth = Carbon::now()->subMonth();
//
//        // Monthly
//        $monthlyExpenses = ContractedService::whereMonth('created_at', now()->month)->where('type', 'monthly')->sum('price');
//        $lastMonthExpenses = ContractedService::whereMonth('created_at', $lastMonth->month)->where('type', 'monthly')->sum('price');
//        $monthlyIncreasePercentage = $lastMonthExpenses != 0 ? (($monthlyExpenses - $lastMonthExpenses) / $lastMonthExpenses) * 100 : 0;
//
//        // Yearly
//        $yearlyExpenses = ContractedService::whereYear('created_at', now()->year)->where('type', 'yearly')->sum('price');
//        $lastYearExpenses = ContractedService::whereYear('created_at', now()->subYear()->year)->where('type', 'yearly')->sum('price');
//        $yearlyIncreasePercentage = $lastYearExpenses != 0 ? (($yearlyExpenses - $lastYearExpenses) / $lastYearExpenses) * 100 : 0;
//
//        // Mensalidades
//        $monthlyPayment = "";
//        $transactions = "";

        $contractedServices = ContractedService::orderBy('created_at', 'desc')->get();

        return view('app.dashboards.dashboard', compact(
            'contractedServices'
        ));
    }

    public function dashboardStock()
    {
        $inventory = Inventory::with('product')->latest()->get();
        $products = Product::get();

        $productCategory = DB::table('products')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('product_categories.name as name', DB::raw('count(products.id) as number'))
            ->groupBy('product_categories.name')
            ->get();

        $array1 = [];

        foreach ($productCategory as $category) {
            $array1['productCategory'][] = $category->name;
            $array1['number'][] = $category->number;
        }

        $array = json_encode($array1);

        return view('app.dashboards.dashboard_stock', compact(
            'inventory',
            'products',
            'array'
        ));
    }

    public function filter(Request $request)
    {
        $status = $request->query('status');

        if ($status === 'in_stock') {
            $products = Product::where('qty', '>', 0)->get();
        } elseif ($status === 'out_of_stock') {
            $products = Product::where('qty', '<=', 0)->get();
        } else {
            $products = Product::all();
        }

        $products = $products->map(function ($product) {
            return [
                'name' => $product->name,
                'image' => 'data:image/png;base64,' . $product->image,
                'price' => $product->price,
                'qty' => $product->qty,
            ];
        });

        return response()->json(['products' => $products]);
    }
}
