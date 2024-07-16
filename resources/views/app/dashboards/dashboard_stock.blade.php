<x-app-layout>
    @section('content')
        <div class="row">
            <div class="col-12">
                <x-breadcrumb title="Dashboard" current="#"></x-breadcrumb>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="icon-cards-row">
                    <div class="glide dashboard-numbers">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-clock"></i>
                                            <p class="card-text mb-0">Pending Orders</p>
                                            <p class="lead text-center">16</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="glide__slide">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-basket-coins"></i>
                                            <p class="card-text mb-0">Completed Orders</p>
                                            <p class="lead text-center">32</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="glide__slide">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-arrow-refresh"></i>
                                            <p class="card-text mb-0">Refund Requests</p>
                                            <p class="lead text-center">2</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="glide__slide">
                                    <a href="#" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-mail-read"></i>
                                            <p class="card-text mb-0">New Comments</p>
                                            <p class="lead text-center">25</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="position-absolute card-top-buttons">

                                <button class="btn btn-header-light icon-button" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="simple-icon-refresh"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right mt-3">
                                    <a class="dropdown-item" href="#">Sales</a>
                                    <a class="dropdown-item" href="#">Orders</a>
                                    <a class="dropdown-item" href="#">Refunds</a>
                                </div>

                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Sales</h5>
                                <div class="dashboard-line-chart chart">
                                    <canvas id="salesChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 mb-4">
                <div class="card">
                    <div class="position-absolute card-top-buttons">
                        <button class="btn btn-header-light icon-button">
                            <i class="simple-icon-refresh"></i>
                        </button>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Próximas cobranças</h5>
                        <div class="scroll dashboard-list-with-thumbs">

                            {{--                            @foreach($contractedServices as $service)--}}
                            {{--                                <div class="d-flex flex-row mb-3">--}}
                            {{--                                    <div class="pt-2 pr-2 pb-2">--}}
                            {{--                                        <a href="#">--}}
                            {{--                                            <p class="list-item-heading">{{$service->name}}</p>--}}
                            {{--                                            <div class="pr-4 d-none d-sm-block">--}}
                            {{--                                                <p class="text-muted mb-1 text-small">{{$service->description}}</p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">{{\Carbon\Carbon::parse($service->created_at)->format('d.m.Y')}}</div>--}}
                            {{--                                        </a>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            @endforeach--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Categoria de produtos</h5>
                        <div class="dashboard-donut-chart chart">
                            <canvas id="chartProductCategory"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Logs</h5>

                        <div class="scroll dashboard-logs">

                            <table class="table table-sm table-borderless">

                                <tbody>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-1 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New user registiration</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">14:12</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Soufflé</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">13:20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-danger align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">14 products added</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">12:55</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Napoleonshat</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">12:44</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">12:30</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Soufflé</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">10:40</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-danger align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">2 categories added</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">10:20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">09:28</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Bebinca</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">09:25</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Bebinca</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">09:20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="log-indicator border-theme-2 align-middle"></span>
                                    </td>
                                    <td>
                                        <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted">08:20</span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Movimentações recentes</h5>

                        <div class="scroll dashboard-list-with-user">
                            @foreach($inventory as $moviment)
                                @php
                                    $image = $moviment->product->image;

                                    $type = $moviment->transaction_type == 'stock_out' ? 'SAÍDA' : 'ENTRADA';
                                    $typeBadge = $moviment->transaction_type == 'stock_out' ? 'danger' : 'success';
                                @endphp
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="{{ "data:image/png;base64, $image" }}" alt="Mayra Sibley"
                                             class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"/>
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">{{$moviment->product->name}}</p>
                                            <p class="text-muted mb-0 text-small my-2">{{\Carbon\Carbon::parse($moviment->created_at)->format('d/m/Y | H:i:s')}}</p>
                                            <p class="text-muted mb-0 text-small">{{$moviment->description}}</p>

                                        </a>
                                        <div class="text-uppercase my-2 text-extra-small">
                                                <small class="badge badge-{{$typeBadge}}">{{"$type [$moviment->qty] "}}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Calendar</h5>
                        <div class="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Best Sellers</h5>
                        <table class="data-table data-table-standard responsive nowrap"
                               data-order="[[ 1, &quot;desc&quot; ]]">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sales</th>
                                <th>Stock</th>
                                <th>Category</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Marble Cake</p>
                                </td>
                                <td>
                                    <p class="text-muted">1452</p>
                                </td>
                                <td>
                                    <p class="text-muted">62</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Fruitcake</p>
                                </td>
                                <td>
                                    <p class="text-muted">1245</p>
                                </td>
                                <td>
                                    <p class="text-muted">65</p>
                                </td>
                                <td>
                                    <p class="text-muted">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Chocolate Cake</p>
                                </td>
                                <td>
                                    <p class="text-muted">1200</p>
                                </td>
                                <td>
                                    <p class="text-muted">45</p>
                                </td>
                                <td>
                                    <p class="text-muted">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Bebinca</p>
                                </td>
                                <td>
                                    <p class="text-muted">1150</p>
                                </td>
                                <td>
                                    <p class="text-muted">4</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Napoleonshat</p>
                                </td>
                                <td>
                                    <p class="text-muted">1050</p>
                                </td>
                                <td>
                                    <p class="text-muted">41</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Magdalena</p>
                                </td>
                                <td>
                                    <p class="text-muted">998</p>
                                </td>
                                <td>
                                    <p class="text-muted">24</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Salzburger Nockerl</p>
                                </td>
                                <td>
                                    <p class="text-muted">924</p>
                                </td>
                                <td>
                                    <p class="text-muted">20</p>
                                </td>
                                <td>
                                    <p class="text-muted">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Soufflé</p>
                                </td>
                                <td>
                                    <p class="text-muted">905</p>
                                </td>
                                <td>
                                    <p class="text-muted">64</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Cremeschnitte</p>
                                </td>
                                <td>
                                    <p class="text-muted">845</p>
                                </td>
                                <td>
                                    <p class="text-muted">12</p>
                                </td>
                                <td>
                                    <p class="text-muted">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Cheesecake</p>
                                </td>
                                <td>
                                    <p class="text-muted">830</p>
                                </td>
                                <td>
                                    <p class="text-muted">36</p>
                                </td>
                                <td>
                                    <p class="text-muted">Desserts</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Gingerbread</p>
                                </td>
                                <td>
                                    <p class="text-muted">807</p>
                                </td>
                                <td>
                                    <p class="text-muted">21</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cupcakes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="list-item-heading">Goose Breast</p>
                                </td>
                                <td>
                                    <p class="text-muted">795</p>
                                </td>
                                <td>
                                    <p class="text-muted">9</p>
                                </td>
                                <td>
                                    <p class="text-muted">Cupcakes</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12 mb-4">
                <div class="card dashboard-progress">
                    <div class="position-absolute card-top-buttons">
                        <button class="btn btn-header-light icon-button">
                            <i class="simple-icon-refresh"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Profile Status</h5>
                        <div class="mb-4">
                            <p class="mb-2">
                                <span>Basic Information</span>
                                <span class="float-right text-muted">12/18</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-2">Portfolio
                                <span class="float-right text-muted">1/8</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-2">Billing Details
                                <span class="float-right text-muted">2/6</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-2">Interests
                                <span class="float-right text-muted">0/8</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="mb-2">Legal Documents
                                <span class="float-right text-muted">1/2</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card dashboard-sq-banner justify-content-end">
                    <div class="card-body justify-content-end d-flex flex-column">
                        <span class="badge badge-pill badge-theme-3 align-self-start mb-3">DORE</span>
                        <p class="lead text-white">MAGIC IS IN THE DETAILS</p>
                        <p class="text-white">Yes, it is indeed!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card dashboard-link-list">
                    <div class="card-body">
                        <h5 class="card-title">Cakes</h5>
                        <div class="d-flex flex-row">
                            <div class="w-50">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <a href="#">Marble Cake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Fruitcake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Chocolate Cake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Fat Rascal</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Financier</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Genoise</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Gingerbread</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Goose Breast</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Parkin</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Petit Gâteau</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Salzburger Nockerl</a>
                                    </li>
                                    <li>
                                        <a href="#">Soufflé</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="w-50">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1">
                                        <a href="#">Streuselkuchen</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Tea Loaf</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Napoleonshat</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Merveilleux</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Magdalena</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Cremeschnitte</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Cheesecake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Bebinca</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Fruitcake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Chocolate Cake</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Fat Rascal</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Financier</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row sortable">
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Payment Status</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Work Progress</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Tasks Completed</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <div class="position-absolute handle card-icon">
                            <i class="simple-icon-shuffle"></i>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Payments Done</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                             data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32"
                             data-show-percent="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card dashboard-filled-line-chart">
                    <div class="card-body ">
                        <div class="float-left float-none-xs">
                            <div class="d-inline-block">
                                <h5 class="d-inline">Website Visits</h5>
                                <span class="text-muted text-small d-block">Unique Visitors</span>
                            </div>
                        </div>
                        <div class="btn-group float-right float-none-xs mt-2">
                            <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                This Week
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">This Month</a>
                            </div>
                        </div>
                    </div>
                    <div class="chart card-body pt-0">
                        <canvas id="visitChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card dashboard-filled-line-chart">
                    <div class="card-body ">
                        <div class="float-left float-none-xs">
                            <div class="d-inline-block">
                                <h5 class="d-inline">Conversion Rates</h5>
                                <span class="text-muted text-small d-block">Per Session</span>
                            </div>
                        </div>
                        <div class="btn-group float-right mt-2 float-none-xs">
                            <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                This Week
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">This Month</a>
                            </div>
                        </div>
                    </div>
                    <div class="chart card-body pt-0">
                        <canvas id="conversionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-4">
                <div class="row">
                    <div class="col-xl-12 col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-file mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">5 Files</p>
                                        <p class="text-small text-white">Pending for print</p>
                                    </div>
                                </div>

                                <div>
                                    <div role="progressbar"
                                         class="progress-bar-circle progress-bar-banner position-relative"
                                         data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                         aria-valuenow="5" aria-valuemax="12" data-show-percent="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">4 Orders</p>
                                        <p class="text-small text-white">On approval process</p>
                                    </div>
                                </div>
                                <div>
                                    <div role="progressbar"
                                         class="progress-bar-circle progress-bar-banner position-relative"
                                         data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                         aria-valuenow="4" aria-valuemax="6" data-show-percent="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <a href="#"
                               class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">8 Alerts</p>
                                        <p class="text-small text-white">Waiting for notice</p>
                                    </div>
                                </div>
                                <div>
                                    <div role="progressbar"
                                         class="progress-bar-circle progress-bar-banner position-relative"
                                         data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                         aria-valuenow="8" aria-valuemax="10" data-show-percent="false">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                <div class="card dashboard-search">
                    <div class="card-body">
                        <h5 class="text-white mb-3">Advanced Search</h5>
                        <div class="form-container">
                            <form>
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                </div>

                                <div class="form-group mb-5">
                                    <label>Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text input-group-append input-group-addon">

                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Price Range</label>
                                    <div>
                                        <div class="slider" id="dashboardPriceRange"></div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-lg mt-3">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card dashboard-small-chart">
                            <div class="card-body">
                                <p class="lead color-theme-1 mb-1 value"></p>
                                <p class="mb-0 label text-small"></p>
                                <div class="chart">
                                    <canvas id="smallChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card dashboard-small-chart">
                            <div class="card-body">
                                <p class="lead color-theme-1 mb-1 value"></p>
                                <p class="mb-0 label text-small"></p>
                                <div class="chart">
                                    <canvas id="smallChart2"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card dashboard-small-chart">
                            <div class="card-body">
                                <p class="lead color-theme-1 mb-1 value"></p>
                                <p class="mb-0 label text-small"></p>
                                <div class="chart">
                                    <canvas id="smallChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card dashboard-small-chart">
                            <div class="card-body">
                                <p class="lead color-theme-1 mb-1 value"></p>
                                <p class="mb-0 label text-small"></p>
                                <div class="chart">
                                    <canvas id="smallChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card dashboard-top-rated">
                    <div class="position-absolute card-top-buttons">
                        <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="simple-icon-refresh"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right mt-3">
                            <a class="dropdown-item filter-option" href="#" data-filter="in_stock">Em estoque</a>
                            <a class="dropdown-item filter-option" href="#" data-filter="out_of_stock">Fora de
                                estoque</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Top Rated Items</h5>

                        <div class="glide best-rated-items">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    @foreach($products as $product)
                                        <div class="glide__slide">
                                            <img class="img-fluid mb-4"
                                                 style="width: auto; max-height: 150px; object-fit: cover;"
                                                 src='{{ "data:image/png;base64,$product->image" }}'
                                                 alt="Imagem do produto">
                                            <h6 class="mb-1">{{ $product->name }}</h6>
                                            <p class="text-small text-muted mb-0 d-inline-block"><strong
                                                    class="text-primary">R$ {{ number_format($product->price * $product->qty, 2, ',', '.') }}</strong>
                                                ({{ $product->qty }})</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
</x-app-layout>

<script>
    var rootStyle = getComputedStyle(document.body);

    var themeColor1 = rootStyle.getPropertyValue("--theme-color-1").trim();
    var themeColor2 = rootStyle.getPropertyValue("--theme-color-2").trim();
    var themeColor3 = rootStyle.getPropertyValue("--theme-color-3").trim();
    var themeColor4 = rootStyle.getPropertyValue("--theme-color-4").trim();
    var themeColor5 = rootStyle.getPropertyValue("--theme-color-5").trim();
    var themeColor6 = rootStyle.getPropertyValue("--theme-color-6").trim();

    var themeColor1_10 = rootStyle
        .getPropertyValue("--theme-color-1-10")
        .trim();
    var themeColor2_10 = rootStyle
        .getPropertyValue("--theme-color-2-10")
        .trim();
    var themeColor3_10 = rootStyle
        .getPropertyValue("--theme-color-3-10")
        .trim();
    var themeColor4_10 = rootStyle
        .getPropertyValue("--theme-color-4-10")
        .trim();

    var themeColor5_10 = rootStyle
        .getPropertyValue("--theme-color-5-10")
        .trim();
    var themeColor6_10 = rootStyle
        .getPropertyValue("--theme-color-6-10")
        .trim();

    var primaryColor = rootStyle.getPropertyValue("--primary-color").trim();
    var foregroundColor = rootStyle
        .getPropertyValue("--foreground-color")
        .trim();
    var separatorColor = rootStyle.getPropertyValue("--separator-color").trim();

    // Parse the JSON data passed from the controller
    let cData = JSON.parse(`<?php echo $array; ?>`);

    // Check the structure of cData
    console.log(cData);

    const data3 = {
        labels: cData.productCategory,
        datasets: [{
            label: 'Número de Produtos por Categoria',
            data: cData.number,
            borderColor: [themeColor6, themeColor4, themeColor2, themeColor5, themeColor3, themeColor1],
            backgroundColor: [
                themeColor6_10,
                themeColor4_10,
                themeColor2_10,
                themeColor5_10,
                themeColor3_10,
                themeColor1_10,
            ],
            borderWidth: 2
        }]
    };

    const config3 = {
        type: 'doughnut',
        data: data3,
        options: {
            plugins: {
                datalabels: {
                    display: false
                }
            },
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                labels: {
                    padding: 30,
                    usePointStyle: true,
                    fontSize: 12
                }
            },
            title: {
                display: false
            },
        }
    };

    const cGasto = new Chart(
        document.getElementById('chartProductCategory'),
        config3
    );
</script>

<script>
    $(document).ready(function () {
        $('.filter-option').click(function (e) {
            e.preventDefault();
            var filter = $(this).data('filter');

            $.ajax({
                url: '/products/filter',
                method: 'GET',
                data: {status: filter},
                success: function (response) {
                    var slidesContainer = $('.glide__slides');
                    slidesContainer.empty();

                    $.each(response.products, function (index, product) {
                        var totalPrice = product.price * product.qty;
                        var formattedPrice = new Intl.NumberFormat('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }).format(totalPrice);

                        var slide = `
                            <div class="glide__slide">
                                <img class="img-fluid mb-4" style="width: auto; max-height: 150px; object-fit: cover;" src="${product.image}" alt="${product.name}">
                                <h6 class="mb-1">${product.name}</h6>
                                <p class="text-small text-muted mb-0 d-inline-block">
                                    <strong class="text-primary">${formattedPrice}</strong> (${product.qty})
                                </p>
                            </div>
                        `;
                        slidesContainer.append(slide);
                    });

                    // Reinitialize the glide after updating the slides
                    if (typeof Glide !== 'undefined') {
                        new Glide('.glide').mount();
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Erro na requisição:', status, error);
                }
            });
        });
    });
</script>

<style>
    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .glide__slide img {
        width: auto;
        max-height: 150px; /* Ajuste conforme necessário */
        object-fit: cover; /* ou 'contain', dependendo do resultado desejado */
    }
</style>

{{--



--}}

