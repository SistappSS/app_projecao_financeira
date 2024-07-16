<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Sub Categoria de produtos"
                        current="Produtos | Sub Categoria de produtos"></x-table-header>

        <x-table tableId="tableProductSubCategory">
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
            var route = "{{ route('sub-categoria-de-produto.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/inventories/product_sub_category.js') }}"></script>

        @include('app.inventories.product_sub_categories.product_sub_category.product_sub_category_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
