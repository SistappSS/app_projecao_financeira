<x-app-layout>
    @section('content')
        <x-alert id="alert-response"/>

        <x-table-header title="Status" current="Status tarefas"></x-table-header>

        <x-table tableId="tableTaskStatus">
            <x-slot name="slot">
                <tr>
                    <th class="text-center">Status</th>
                    <th class="text-center">Cadatrado</th>
                    <th class="text-center">Ações</th>
                </tr>
            </x-slot>
        </x-table>

        <script>
            var route = "{{ route('tarefa-status.index') }}"
        </script>

        <script type="module" src="{{ asset('assets/js/view/task_status.js') }}"></script>

        @include('app.tasks.task_status.task_status_modal')
        @include('common.modal.delete')
    @endsection
</x-app-layout>
