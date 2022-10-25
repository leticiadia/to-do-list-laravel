@extends('index')

@section('content')

<section class="tasks-list">
    <h2>Tasks</h2>

    <div class="button-create">
        <a href="#" onclick="Modal.open()" class="btn-new">New Task +</a>
    </div>

    @include('templates.form')

    <ul>
        @foreach($tasks as $task)
        <li>
            <div class="task-name">
                <p> {{ $task->name }} </p>
            </div>

            <div class="task-label">
                <span>{{ $task->label }}</span>
            </div>

            <div class="icons">
                <div class="icon-edit">
                    <a href="/task/{{ $task->id }}/edit" onclick="ModalEdit.open()">
                        <x-eos-edit width="24" height="24" style="color: #f59e0b;" />
                    </a>
                    @include('templates.edit')
                </div>

                <div class="icon-delete">
                    <a href="#">
                        <x-eos-delete width="24" height="24" style="color: #ef4444;" />
                    </a>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>

@endsection