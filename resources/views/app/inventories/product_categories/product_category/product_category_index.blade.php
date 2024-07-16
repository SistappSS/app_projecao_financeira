<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Categoria de produtos" current="Produtos | Categoria de produtos"></x-table-header>

        <x-table tableId="tableProductCategory">
            <x-slot name="slot">
                <tr>
                    <th>
                        Categoria de produto
                    </th>
                    <th class="text-center">
                        Status
                    </th>
                    <th class="text-center">
                        Cadastro
                    </th>
                    <th class="text-center">
                        Ações
                    </th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('categoria-de-produto.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/inventories/product_category.js') }}"></script>

        @include('app.inventories.product_categories.product_category.product_category_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
