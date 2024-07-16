<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Produtos" current="Inventário | Controle de estoque"></x-table-header>

        <x-table tableId="tableInventory">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>Produto</th>
                    <th>Responsável</th>
                    <th>Quantidade</th>
                    <th>Movimentação</th>
                    <th>Descrição</th>
                    <th>Realizado em</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('inventario.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/inventories/inventory.js') }}"></script>

        @include('app.inventories.inventories.inventory.inventory_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>


