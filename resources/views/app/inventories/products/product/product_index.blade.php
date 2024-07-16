<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Produtos" current="Inventário | Produtos"></x-table-header>

        <x-table tableId="tableProduct">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>Produto</th>
                    <th>Imagem</th>
                    <th>Estoque</th>
                    <th>Status</th>
                    <th>Cadatrado</th>
                    <th>Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('produto.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/inventories/product.js') }}"></script>

        @include('app.inventories.products.product.product_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>


