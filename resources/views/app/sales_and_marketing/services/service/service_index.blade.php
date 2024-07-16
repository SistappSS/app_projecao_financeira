<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Serviços" current="Serviços"></x-table-header>

        <x-table tableId="tableService">
            <x-slot name="slot">
                <tr>
                    <th class="text-center">
                        Serviço
                    </th>
                    <th class="text-center">
                        Preço
                    </th>
                    <th class="text-center">
                        Pagamento
                    </th>
                    <th class="text-center">
                        Cadatrado em
                    </th>
                    <th class="text-center">
                        Ações
                    </th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('servico.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/sales_and_marketing/service.js') }}"></script>

        @include('app.sales_and_marketing.services.service.service_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
<<<<<<< HEAD


=======
>>>>>>> origin/master
