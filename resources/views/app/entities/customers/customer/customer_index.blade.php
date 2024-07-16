<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Clientes" current="Entidades | Clientes"></x-table-header>

        <x-table tableId="tableCustomer">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>Cliente</th>
                    <th class="text-center">Telefone</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Cadatrado em</th>
                    <th class="text-center">Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('cliente.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/entities/customer.js') }}"></script>
        <script type="module" src="{{ asset('assets/js/common/mask_input.js') }}"></script>

        @include('app.entities.customers.customer.customer_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>

