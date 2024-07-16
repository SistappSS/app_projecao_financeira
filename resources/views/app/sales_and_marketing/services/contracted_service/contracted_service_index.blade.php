<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Serviços contratados" current="Serviços contratados"></x-table-header>

        <x-table tableId="tableContractedService">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>
                        Serviço
                    </th>
                    <th>
                        Preço
                    </th>
                    <th>
                        Tipo
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Cadastrado em
                    </th>
                    <th>
                        Ações
                    </th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('servico-contratado.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/contracted_service.js') }}"></script>

        @include('app.sales_and_marketing.services.contracted_service.contracted_service_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
