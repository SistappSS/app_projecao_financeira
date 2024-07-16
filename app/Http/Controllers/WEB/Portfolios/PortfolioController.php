<?php

namespace App\Http\Controllers\WEB\Portfolios;

use App\Http\Controllers\Controller;
use App\Traits\WebIndex;

class PortfolioController extends Controller
{
    use WebIndex;

    public function index() {
        return $this->webRoute('app.portfolios.portfolio.portfolio_index', 'portfolio');
    }
}
