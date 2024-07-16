<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Fornecedores" current="Entidades | Fornecedores"></x-table-header>

        <x-table tableId="tableSupplier">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>Fornecedor</th>
                    <th class="text-center">Telefone</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Cadatrado em</th>
                    <th class="text-center">Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('fornecedor.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/entities/supplier.js') }}"></script>
        <script type="module" src="{{ asset('assets/js/common/mask_input.js') }}"></script>

        @include('app.entities.suppliers.supplier.supplier_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>

