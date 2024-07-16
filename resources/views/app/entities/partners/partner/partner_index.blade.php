<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Sócios" current="Entidades | Sócios"></x-table-header>

        <x-table tableId="tablePartner">
            <x-slot name="slot">
                <tr>
                    <th>
                        Usuário
                    </th>
                    <th class="text-center">
                        Porcentagem
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
            var route = "{{ route('sociedade.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/entities/partner.js') }}"></script>

        @include('app.entities.partners.partner.partner_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
