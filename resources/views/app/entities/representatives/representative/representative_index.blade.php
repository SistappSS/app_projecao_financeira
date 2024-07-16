<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Representantes" current="Entidades | Representantes"></x-table-header>

        <x-table tableId="tableRepresentative">
            <x-slot name="slot">
                <tr class="text-center">
                    <th>Representante</th>
                    <th class="text-center">Telefone</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Cadatrado em</th>
                    <th class="text-center">Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('representante.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/entities/representative.js') }}"></script>
        <script type="module" src="{{ asset('assets/js/common/mask_input.js') }}"></script>

        @include('app.entities.representatives.representative.representative_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>

