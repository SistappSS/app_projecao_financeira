<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Usuários" current="Entidades | Usuários"></x-table-header>

        <x-table tableId="tableUser">
            <x-slot name="slot">
                <tr>
                    <th>Usuário</th>
                    <th class="text-center">Permissão</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Cadatrado</th>
                    <th class="text-center">Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('usuario.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/entities/user.js') }}"></script>

        @include('app.entities.users.user.user_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>


