<x-app-layout>
    @section('content')
        <div class="row">
            <div class="col-12">
                <x-breadcrumb title="Quadro de tarefas" current="Tarefas"></x-breadcrumb>

                <div class="top-right-button-container d-flex align-items-center align-content-center">
                    <button class="btn btn-primary add-status mx-2" data-toggle="modal" data-target="#modalAdd">NOVO
                        STATUS
                    </button>
                </div>

                <div class="modal fade modal-right" id="modalAdd" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalRight" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content" id="statusForm" method="POST" action="/kanban/status">
                            @csrf

                            <div class="modal-header">
                                <h5 class="modal-title">Adicionar Novo Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="statusName">Nome do Status</label>
                                    <input type="text" class="form-control" id="statusName" name="task_status"
                                           placeholder="Nome do Status" required>
                                </div>
                                <div class="form-group">
                                    <label for="statusColor">Cor do Status</label>
                                    <input type="color" class="form-control" id="statusColor" name="status_color"
                                           required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar
                                </button>
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="separator mb-4"></div>
            </div>
        </div>

        <div class="row sortable-statuses">
            @foreach($statuses as $status)
                @php
                    $color = $status->color;

                    if(strpos($status->color, '#000') !== false) {
                        $color = '#fff';
                    } else if(strpos($status->color, '#fff') !== false) {
                        $color = '#000';
                    } else {
                        $color = $status->color;
                    }
                @endphp

                <div class="col-md-3" data-status-id="{{ $status->id }}">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header text-uppercase">{{ $status->task_status }}</h5>
                            <span class="tag-color-status"><i class="iconsminds-tag"
                                                              style="color: {{$status->color}}"></i></span>
                        </div>
                        <div class="card-body">
                            <ul class="sortable-tasks list-unstyled" data-status-id="{{ $status->id }}">
                                @foreach($status->tasks as $task)
                                    <li class="mb-2" data-task-id="{{ $task->id }}">
                                        <div class="card" style="box-shadow: 1px 1px 5px rgba(0,0,0,0.42);">
                                            <div class="card-body" style="padding: 5px 15px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="card-text text-muted m-0">{{ $task->task }}</p>
                                                    <button class="btn btn-outline-danger remove-task" data-task-id="{{ $task->id }}"><span>x</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex">
                                <input type="text" class="form-control form-control-sm" placeholder="Nova tarefa">
                                <button class="btn btn-primary add-task"><span>+</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
</x-app-layout>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add status functionality
        document.getElementById('statusForm').addEventListener('submit', function (e) {
            e.preventDefault();
            let statusName = document.getElementById('statusName').value;
            let statusColor = document.getElementById('statusColor').value;

            fetch(this.action, {
                method: 'POST',
                headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                body: JSON.stringify({task_status: statusName, status_color: statusColor})
            }).then(response => response.json()).then(status => {
                let col = document.createElement('div');
                col.className = 'col-md-3';
                col.dataset.statusId = status.id;
                col.innerHTML = `
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-header text-uppercase">${status.task_status}</h5>
                        <ul class="sortable-tasks list-unstyled" data-status-id="${status.id}"></ul>
                        <div class="d-flex">
                            <input type="text" class="form-control form-control-sm" placeholder="Nova tarefa">
                            <button class="btn btn-primary add-task"><span>+</span></button>
                        </div>
                    </div>
                </div>
            `;
                document.querySelector('.sortable-statuses').appendChild(col);
                $('#modalAdd').modal('hide');
                document.getElementById('statusForm').reset();
                initializeTaskSortable();
                initializeTaskButtons();
            });
        });

        // Add task functionality
        function initializeTaskButtons() {
            document.querySelectorAll('.add-task').forEach(button => {
                button.addEventListener('click', function () {
                    let input = this.previousElementSibling;
                    let statusId = this.closest('[data-status-id]').dataset.statusId;
                    fetch('/kanban/task', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                        body: JSON.stringify({task: input.value, task_status_id: statusId})
                    }).then(response => response.json()).then(task => {
                        let li = document.createElement('li');
                        li.className = 'mb-2';
                        li.dataset.taskId = task.id;
                        li.innerHTML = `
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">${task.task}</p>
                                <button class="btn btn-danger remove-task" data-task-id=" ${task.id}">X</button>
                            </div>
                        </div>
                    `;
                        input.parentNode.previousElementSibling.appendChild(li);
                        input.value = '';
                        initializeTaskSortable();
                    });
                });
            });
        }

        // Sortable functionality
        function initializeTaskSortable() {
            document.querySelectorAll('.sortable-tasks').forEach(sortable => {
                new Sortable(sortable, {
                    group: 'shared',
                    animation: 150,
                    onEnd: function (evt) {
                        let tasks = [];
                        evt.to.querySelectorAll('li').forEach((li, index) => {
                            tasks.push({
                                id: li.dataset.taskId,
                                position: index,
                                task_status_id: evt.to.dataset.statusId
                            });
                        });
                        fetch('/kanban/tasks/update-position', {
                            method: 'POST',
                            headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                            body: JSON.stringify({tasks})
                        });
                    }
                });
            });
        }

        function initializeStatusSortable() {
            new Sortable(document.querySelector('.sortable-statuses'), {
                group: 'statuses',
                animation: 150,
                onEnd: function (evt) {
                    let statuses = [];
                    document.querySelectorAll('.sortable-statuses > [data-status-id]').forEach((col, index) => {
                        statuses.push({id: col.dataset.statusId, position: index});
                    });
                    fetch('/kanban/statuses/update-position', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                        body: JSON.stringify({statuses})
                    });
                }
            });
        }

        // Remove task functionality
        document.querySelectorAll('.remove-task').forEach(button => {
            button.addEventListener('click', function () {
                let taskId = this.dataset.taskId;
                fetch('/kanban/task/remove', {
                    method: 'DELETE',
                    headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    body: JSON.stringify({task_id: taskId})
                }).then(response => {
                    if (response.ok) {
                        // Remove the task from the UI
                        this.closest('li').remove();
                    } else {
                        // Handle errors if needed
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    // Handle errors if needed
                });
            });
        });

        initializeTaskButtons();
        initializeTaskSortable();
        initializeStatusSortable();
    });

</script>

<style>
    .card .tag-color-status i {
        font-size: 20px;
        margin-right: 15px;
    }

    .card .card-header {
        padding-top: 15px;
        font-size: 14px;
        font-weight: 900;
    }

    .card .card-body {
        padding: 15px;
        margin: 0;
    }

    .card .card-body .form-control-sm {
        height: 30px !important;
    }

    .card .card-body .add-task, .card .card-body .remove-task {
        margin-left: 7.5px;
        padding: 0 7.5px;
        font-size: 16px;
    }

    .tag-color-status i {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
    }

    .top-right-button-container .add-status, .card .card-body .add-task, .card .card-body .form-control-sm, .card .card-body .remove-task  {
        border-radius: 5px;
    }
</style>
