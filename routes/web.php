<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\Common\CommonController;
use App\Http\Controllers\Common\DashboardController;
use App\Http\Controllers\WEB\Tasks\TaskController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/vendas', [DashboardController::class, 'crm'])->name('dashboard-vendas');
    Route::get('/dashboard/financeiro', [DashboardController::class, 'crm'])->name('dashboard-financeiro');
    Route::get('/dashboard/estoque', [DashboardController::class, 'crm'])->name('dashboard-estoque');

    // Tasks
    Route::get('/tarefa', [App\Http\Controllers\WEB\Tasks\TaskController::class, 'index']);
    Route::resource('/api/tarefa', \App\Http\Controllers\API\Projects\Tasks\TaskController::class)->except('create', 'edit');
    //      Tasks
    Route::get('/tarefa-status', [App\Http\Controllers\WEB\Tasks\TaskStatusController::class, 'index'])->name('tarefa-status-web.index');
    Route::resource('/api/tarefa-status', \App\Http\Controllers\API\Projects\Tasks\TaskStatusController::class)->except('create', 'edit');

    // Budgets
    Route::get('/orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'index'])->name('orcamento-web.index');
    Route::get('/orcamento/novo-orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'create'])->name('orcamento-web.create');
    Route::get('/orcamento/{budget_id}/editar-orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'edit'])->name('orcamento-web.edit');
    Route::resource('/api/orcamento', \App\Http\Controllers\API\SalesAndMarketing\Budgets\BudgetController::class)->except('create', 'edit');

    //  Plans Items
    Route::get('/servico', [App\Http\Controllers\WEB\SalesAndMarketing\Services\ServiceController::class, 'index'])->name('servico-web.index');
    Route::resource('/api/servico', \App\Http\Controllers\API\SalesAndMarketing\Services\ServiceController::class)->except('create', 'edit');

    //      Contracted Plans
    Route::get('/plano-contratado', [\App\Http\Controllers\WEB\SalesAndMarketing\Plans\ContractedPlanController::class, 'index'])->name('plano-contratado-web.index');
    Route::resource('/api/plano-contratado', \App\Http\Controllers\API\SalesAndMarketing\Plans\ContractedPlansController::class)->except('create', 'edit');

    // Contracts
    Route::get('/contrato', [App\Http\Controllers\WEB\Contracts\ContractController::class, 'index'])->name('contrato-web.index');
    Route::resource('/api/contrato', \App\Http\Controllers\API\SalesAndMarketing\Contracts\ContractController::class)->except('create', 'edit');

    // Expenses
    Route::get('/servico-contratado', [\App\Http\Controllers\WEB\SalesAndMarketing\Services\ContractedServiceController::class, 'index'])->name('servico-contratado-web.index');
    Route::resource('/api/servico-contratado', \App\Http\Controllers\API\SalesAndMarketing\Services\ContractedServiceController::class)->except('create', 'edit');

    // Portfolios
    Route::get('/portfolio', [App\Http\Controllers\WEB\Portfolios\PortfolioController::class, 'index'])->name('portfolio-web.index');
    Route::resource('/api/portfolio', App\Http\Controllers\API\Portfolios\PortfolioController::class)->except('create', 'edit');

// web.php
    Route::get('/tarefa', [TaskController::class, 'index'])->name('tarefa-web.index');
    Route::post('/kanban/task', [TaskController::class, 'storeTask']);
    Route::post('/kanban/tasks/update-position', [TaskController::class, 'updateTaskPosition']);
    Route::post('/kanban/status', [TaskController::class, 'storeStatus']);
    Route::post('/kanban/statuses/update-position', [TaskController::class, 'updateStatusPosition']);
    Route::delete('/kanban/task/remove', [TaskController::class, 'removeTask']);

    // ===================== | Dashboards
        // -- Dashboard
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // -- Dashboard Stock
        Route::get('/dashboard/estoque', [DashboardController::class, 'dashboardStock'])->name('dashboard-estoque');
        Route::get('/products/filter', [DashboardController::class, 'filter']);


    // ===================== | Entities
        // -- Users
        Route::get('/usuario', [\App\Http\Controllers\WEB\Entities\Users\UserController::class, 'index'])->name('usuario-web.index');
        Route::resource('/api/usuario', \App\Http\Controllers\API\Entities\Users\UserController::class)->except('create', 'edit');

        // -- Partners
        Route::get('/sociedade', [\App\Http\Controllers\WEB\Entities\Partners\PartnerController::class, 'index'])->name('sociedade-web.index');
        Route::resource('/api/sociedade', \App\Http\Controllers\API\Entities\Partners\PartnerController::class)->except('create', 'edit');

        // -- Customers
        Route::get('/cliente', [\App\Http\Controllers\WEB\Entities\Customers\CustomerController::class, 'index'])->name('cliente-web.index');
        Route::resource('/api/cliente', \App\Http\Controllers\API\Entities\Customers\CustomerController::class)->except('create', 'edit');

        // -- Representatives
        Route::get('/representante', [\App\Http\Controllers\WEB\Entities\Representatives\RepresentativeController::class, 'index'])->name('representante-web.index');
        Route::resource('/api/representante', \App\Http\Controllers\API\Entities\Representatives\RepresentativeController::class)->except('create', 'edit');

        // -- Suppliers
        Route::get('/fornecedor', [\App\Http\Controllers\WEB\Entities\Suppliers\SupplierController::class, 'index'])->name('fornecedor-web.index');
        Route::resource('/api/fornecedor', \App\Http\Controllers\API\Entities\Suppliers\SupplierController::class)->except('create', 'edit');

    // ===================== | Inventories
        // -- Categories
        Route::get('/categoria-de-produto', [App\Http\Controllers\WEB\Inventories\ProductCategories\ProductCategoryController::class, 'index'])->name('categoria-de-produto-web.index');
        Route::resource('/api/categoria-de-produto', \App\Http\Controllers\API\Inventories\ProductCategories\ProductCategoryController::class)->except('create', 'edit');

        // -- Sub Categories
        Route::get('/sub-categoria-de-produto', [App\Http\Controllers\WEB\Inventories\ProductSubCategories\ProductSubCategoryController::class, 'index'])->name('sub-categoria-de-produto-web.index');
        Route::resource('/api/sub-categoria-de-produto', \App\Http\Controllers\API\Inventories\ProductSubCategories\ProductSubCategoryController::class)->except('create', 'edit');

        // -- Products
        Route::get('/produto', [App\Http\Controllers\WEB\Inventories\Products\ProductController::class, 'index'])->name('produto-web.index');
        Route::resource('/api/produto', App\Http\Controllers\API\Inventories\Products\ProductController::class)->except('create', 'edit');

        // -- Invetories
       Route::get('/inventario', [App\Http\Controllers\WEB\Inventories\Inventory\InventoryController::class, 'index'])->name('inventario-web.index');
       Route::resource('/api/inventario', App\Http\Controllers\API\Inventories\Inventory\InventoryController::class)->except('create', 'edit');

    // ===================== | Sales And Marketing
        // -- Services
        Route::get('/servico', [App\Http\Controllers\WEB\SalesAndMarketing\Services\ServiceController::class, 'index'])->name('servico-web.index');
        Route::resource('/api/servico', \App\Http\Controllers\API\SalesAndMarketing\Services\ServiceController::class)->except('create', 'edit');

        // -- Leads
        // Route::get('/captacao-de-lead', [App\Http\Controllers\WEB\SalesAndMarketing\Leads\LeadCaptureController::class, 'index'])->name('captacao-de-lead-web.index');
        // Route::resource('/api/captacao-de-lead', \App\Http\Controllers\API\SalesAndMarketing\Leads\LeadCaptureController::class)->except('create', 'edit');

        // -- Budgets
        Route::get('/orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'index'])->name('orcamento-web.index');
        Route::get('/orcamento/novo-orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'create'])->name('orcamento-web.create');
        Route::get('/orcamento/{budget_id}/editar-orcamento', [App\Http\Controllers\WEB\Budgets\BudgetController::class, 'edit'])->name('orcamento-web.edit');
        Route::resource('/api/orcamento', \App\Http\Controllers\API\SalesAndMarketing\Budgets\BudgetController::class)->except('create', 'edit');

    // -- Products

        // -- Invetories

    // ===================== | Sales And Marketing
    // ===================== | Shoppings
    // ===================== | Finances
    // ===================== | Projects
    // ===================== | RH
    // ===================== | Customer Support
    // ===================== | E-mails
    // ===================== | Reports
    // ===================== | Configurations

    // ===================== | Commons
    Route::get('/api/state', [CommonController::class, 'getState']);
});

Route::get('/orcamento/cliente/{phone}/{code}', [\App\Http\Controllers\WEB\Entities\Customers\CustomerBudgetController::class, 'index'])->name('orcamento-cliente-web.index');


