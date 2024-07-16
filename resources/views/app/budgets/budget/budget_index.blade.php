<x-app-layout>
    @section('content-dashboard')
        <div class="row">
            <div class="col-12">
                <div class="card card-table">
                    <x-alert id="alert-response"/>

                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>{{currentUrl() . " (s)"}}</h5>
                            <div class="d-flex text-end">
                                <x-search-table></x-search-table>
                                <a href="{{route('orcamento-web.create')}}" class="btn btn-sm bg-gradient-primary" ><i class="fa-solid fa-plus-minus"></i></a>
                            </div>

                        </div>
                    </div>
                    <x-table tableId="tableBudget">
                        <x-slot name="slot">
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Cliente
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Valor
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
            var route = "{{ route('orcamento.index') }}"

            document.addEventListener('DOMContentLoaded', function () {
                var tableContainer = document.querySelector('.card-table');

                new PerfectScrollbar(tableContainer);
            });
        </script>

        <script type="module" src="{{ asset('assets/js/view/budget.js') }}"></script>

        @include('common.modal.delete')
    @endsection
</x-app-layout>
