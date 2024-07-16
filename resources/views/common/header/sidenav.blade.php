<div class="menu menu-sidenav">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                {{-- Dashboards --}}
                <li class="{{ isActive(['dashboard', 'dashboard-vendas', 'dashboard-financeiro', 'dashboard-estoque']) }}">
                    <a href="#dashboard">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>

                {{-- Entities --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['usuario-web.index', 'sociedade-web.index', 'cliente-web.index', 'representante-web.index', 'fornecedor-web.index']) }}">
                        <a href="#entities">
                            <i class="iconsminds-building"></i> Entidades
                        </a>
                    </li>
                @endcanany

                {{-- Product/Stock --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['categoria-de-produto-web.index', 'sub-categoria-de-produto-web.index', 'produto-web.index', 'inventario-web.index']) }}">
                        <a href="#products">
                            <i class="iconsminds-posterous"></i> Inventário
                        </a>
                    </li>
                @endcanany

                {{-- Sales/Marketing --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['servico-web.index', 'orcamento-web.index']) }}">
                        <a href="#sales">
                            <i class="iconsminds-shop"></i>Vendas/Leads
                        </a>
                    </li>
                @endcanany

                {{-- Shopping --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#shoppings">
                            <i class="iconsminds-cash-register-2"></i>Compras
                        </a>
                    </li>
                @endcanany

                {{-- Finances --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#finances">
                            <i class="iconsminds-bank"></i>Financeiro
                        </a>
                    </li>
                @endcanany

                {{-- Projects --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#projects">
                            <i class="iconsminds-management"></i>Projetos
                        </a>
                    </li>
                @endcanany

                {{-- RH --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#rh">
                            <i class="iconsminds-rename"></i>RH
                        </a>
                    </li>
                @endcanany

                {{-- Customer Support --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#support">
                            <i class="iconsminds-wrench"></i>Suporte
                        </a>
                    </li>
                @endcanany

                {{-- Reports --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#reports">
                            <i class="iconsminds-line-chart-1"></i>Relatórios
                        </a>
                    </li>
                @endcanany

                {{-- E-mails --}}
                @canany(['plan2'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#emails">
                            <i class="iconsminds-mail-send"></i>E-mails
                        </a>
                    </li>
                @endcanany

                {{-- Account Config --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['tarefa-web.index', 'tarefa-status-web.index']) }}">
                        <a href="#configs">
                            <i class="iconsminds-gear-2"></i>Configurações
                        </a>
                    </li>
                @endcanany

                {{-- Logout --}}
                <li>
                    <a href="#" class="text-danger">
                        <i class="iconsminds-rewind"></i><b>Deslogar</b>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            {{-- Dashboards --}}
            <ul class="list-unstyled" data-link="dashboard">
                @canany(['plan2'])
                    <li class="{{ isActive(['dashboard']) }}">
                        <a href="{{route('dashboard')}}">
                            <i class="iconsminds-doughnut"></i> <span class="d-inline-block">Dashboard Principal</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan2'])
                    <li class="{{ isActive(['dashboard-vendas']) }}">
                        <a href="{{route('dashboard-vendas')}}">
                            <i class="iconsminds-basket-coins"></i>
                            <span class="d-inline-block">Dashboard de Vendas</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan2'])
                    <li class="{{ isActive(['dashboard-financeiro']) }}">
                        <a href="{{route('dashboard-financeiro')}}">
                            <i class="iconsminds-coins"></i>
                            <span class="d-inline-block">Dashboard Financeiro</span>
                        </a>
                    </li>
                @endcanany
                {{-- Stock Dashboard --}}
                @canany(['plan1'])
                    <li class="{{ isActive(['dashboard-estoque']) }}">
                        <a href="{{route('dashboard-estoque')}}">
                            <i class="iconsminds-equalizer"></i>
                            <span class="d-inline-block">Dashboard de Estoque</span>
                        </a>
                    </li>
                @endcanany
            </ul>

            {{-- Entities --}}
            <ul class="list-unstyled" data-link="entities">
                @canany(['plan1'])
                    <li class="{{isActive('usuario-web.index')}}">
                        <a href="{{route('usuario-web.index')}}">
                            <i class="iconsminds-male"></i> <span
                                class="d-inline-block">Usuários</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan2'])
                    <li class="{{isActive('sociedade-web.index')}}">
                        <a href="{{route('sociedade-web.index')}}">
                            <i class="iconsminds-business-man"></i> <span
                                class="d-inline-block">Sócios</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan1'])
                    <li class="{{isActive('cliente-web.index')}}">
                        <a href="{{route('cliente-web.index')}}">
                            <i class="iconsminds-business-man-woman"></i> <span
                                class="d-inline-block">Clientes</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan2'])
                    <li class="{{isActive('representante-web.index')}}">
                        <a href="{{route('representante-web.index')}}">
                            <i class="iconsminds-administrator"></i> <span class="d-inline-block">Representantes</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan1'])
                    <li class="{{isActive('fornecedor-web.index')}}">
                        <a href="{{route('fornecedor-web.index')}}">
                            <i class="iconsminds-conference"></i> <span
                                class="d-inline-block">Fornecedores</span>
                        </a>
                    </li>
                @endcanany
            </ul>

            {{-- Product/Stock --}}
            <ul class="list-unstyled" data-link="products">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        <i class="iconsminds-tag"></i>
                        <span class="d-inline-block">Categorias</span>
                    </a>
                </li>

                <li class="{{isActive('sub-categoria-de-produto-web.index')}}">
                    <a href="{{route('sub-categoria-de-produto-web.index')}}">
                        <i class="iconsminds-tag"></i>
                        <span class="d-inline-block">Sub Categorias</span>
                    </a>
                </li>

                <li class="{{isActive('produto-web.index')}}">
                    <a href="{{route('produto-web.index')}}">
                        <i class="iconsminds-pantone"></i> <span class="d-inline-block">Produtos</span>
                    </a>
                </li>

                <li class="{{isActive('inventario-web.index')}}">
                    <a href="{{route('inventario-web.index')}}">
                        <i class="iconsminds-posterous"></i>
                        <span class="d-inline-block">Inventário</span>
                    </a>
                </li>
            </ul>

            {{-- Sales/Marketing --}}
            <ul class="list-unstyled" data-link="sales">
                {{-- Serviços --}}
                <li class="{{isActive('servico-web.index')}}">
                    <a href="{{route('servico-web.index')}}">
                        <i class="iconsminds-tag"></i>
                        <span class="d-inline-block">Serviços</span>
                    </a>
                </li>

                {{-- Leads --}}
                <li class="{{isActive('-web.index')}}">
                    <a href="{{route('servico-web.index')}}">
                        <i class="iconsminds-mailbox-full"></i>
                        <span class="d-inline-block">Captação de Leads</span>
                    </a>
                </li>

                {{-- Orçamentos --}}
                <li class="{{isActive('orcamento-web.index')}}">
                    <a href="{{route('orcamento-web.index')}}">
                        <i class="iconsminds-receipt-4"></i>
                        <span class="d-inline-block">Orçamentos</span>
                    </a>
                </li>
                {{-- Serviços contratados --}}
                <li class="{{isActive('-web.index')}}">
                    <a href="{{route('servico-web.index')}}">
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Planos contratados</span>
                    </a>
                </li>
                {{-- Contratos --}}
                <li class="{{isActive('-web.index')}}">
                    <a href="{{route('servico-web.index')}}">
                        <i class="iconsminds-file-clipboard-file---text"></i><span
                            class="d-inline-block">Contratos</span>
                    </a>
                </li>
                {{-- Portfólio de projetos --}}
                <li class="{{isActive('-web.index')}}">
                    <a href="{{route('servico-web.index')}}">
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Portfólio</span>
                    </a>
                </li>
            </ul>

            {{-- Shopping --}}
            <ul class="list-unstyled" data-link="shoppings">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Pedido de Compra</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span
                            class="d-inline-block">Gestão de Fornecedores</span>
                    </a>
                </li>
            </ul>

            {{-- Finances --}}
            <ul class="list-unstyled" data-link="finances">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Contas a Pagar</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Contas a Receber</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Faturas</span>
                    </a>
                </li>
            </ul>

            {{-- Projects --}}
            <ul class="list-unstyled" data-link="projects">
                <li class="{{isActive('tarefa-status-web.index')}}">
                    <a href="{{route('tarefa-status-web.index')}}">
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Controle de Status</span>
                    </a>
                </li>
                <li class="{{isActive('tarefa-web.index')}}">
                    <a href="{{route('tarefa-web.index')}}">
                        <i class="iconsminds-check"></i> <span class="d-inline-block">Gestão de Tarefas</span>
                    </a>
                </li>
            </ul>

            {{-- RH --}}
            <ul class="list-unstyled" data-link="rh">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Gestão do RH</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Funcionários</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Salários/Benefícios</span>
                    </a>
                </li>
            </ul>

            {{-- Customer Support --}}
            <ul class="list-unstyled" data-link="support">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Tickets</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Fórum Ajuda</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Chat ao Vivo</span>
                    </a>
                </li>
            </ul>

            {{-- E-mails --}}
            <ul class="list-unstyled" data-link="emails">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Caixa de E-mail</span>
                    </a>
                </li>
                <li class="{{isActive('sociedade-web.index')}}">
                    {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                    <a href="#" type="button" data-toggle="popover" data-placement="top"
                       data-content="Ainda em desenvolvimento!">
                        <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Integração E-mail</span>
                    </a>
                </li>
            </ul>

            {{-- Reports --}}
            <ul class="list-unstyled" data-link="reports">
                @canany(['plan2'])
                    <li class="{{isActive('categoria-de-produto-web.index')}}">
                        <a href="{{route('categoria-de-produto-web.index')}}">
                            {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                            <i class="iconsminds-tag"></i> <span
                                class="d-inline-block">Vendas</span>
                        </a>
                    </li>
                    <li class="{{isActive('sociedade-web.index')}}">
                        {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                        <a href="#" type="button" data-toggle="popover" data-placement="top"
                           data-content="Ainda em desenvolvimento!">
                            <i class="iconsminds-basket-coins"></i> <span class="d-inline-block">Novos Leads</span>
                        </a>
                    </li>
                @endcanany
                @canany(['plan1'])
                    <li class="{{isActive('sociedade-web.index')}}">
                        {{--                                <a href="{{route('sociedade-web.index')}}">--}}
                        <a href="#" type="button" data-toggle="popover" data-placement="top"
                           data-content="Ainda em desenvolvimento!">
                            <i class="iconsminds-basket-coins"></i> <span
                                class="d-inline-block">Movimentação Estoque</span>
                        </a>
                    </li>
                @endcanany
            </ul>

            {{-- Account Config --}}
            <ul class="list-unstyled" data-link="configs">
                <li class="{{isActive('categoria-de-produto-web.index')}}">
                    <a href="{{route('categoria-de-produto-web.index')}}">
                        {{--                                <a href="#" type="button" data-toggle="popover" data-placement="top" data-content="Ainda em desenvolvimento!">--}}
                        <i class="iconsminds-tag"></i> <span
                            class="d-inline-block">Configurações da Conta</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    .menu-sidenav ul li a i {
        font-size: 22px !important;
    }
</style>
