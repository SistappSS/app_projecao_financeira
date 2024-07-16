<x-app-layout>
    @section('content-dashboard')
        <div class="row">
            <div class="col-12">
                <div class="card card-table">
                    <x-alert id="alert-response"/>

                    <x-card-header title="{{currentUrl()}}"></x-card-header>

                    <x-table tableId="tablePortfolio">
                        <x-slot name="slot">
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Projeto
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Imagem
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Cadatrado em
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Ações
                                </th>
                            </tr>
                        </x-slot>
                    </x-table>

                    {{--                    <x-table-paginate></x-table-paginate>--}}
                </div>
            </div>
        </div>

        <script>
            var route = "{{ route('portfolio.index') }}"

            document.addEventListener('DOMContentLoaded', function () {
                var tableContainer = document.querySelector('.card-table');

                new PerfectScrollbar(tableContainer);
            });
        </script>

        <script type="module" src="{{ asset('assets/js/view/portfolio.js') }}"></script>
        @include('app.portfolios.portfolio.portfolio_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
