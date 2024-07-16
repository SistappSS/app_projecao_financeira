<?php

namespace App\Providers;

use App\Models\Budgets\Budget;
use App\Models\Inventories\Inventories\Inventory;
use App\Observers\BudgetObserver;
use App\Observers\InventoryObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\Faker\Generator::class, concrete: function () {
            return \Faker\Factory::create('pt_BR');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Model::unguard();

        Inventory::observe(InventoryObserver::class);
        Budget::observe(BudgetObserver::class);
    }
}
