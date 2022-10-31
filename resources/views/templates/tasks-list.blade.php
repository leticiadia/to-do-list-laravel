@extends('index')

@section('content')

<section class="tasks-list shadow-lg h-2/3 w-2/4 p-20">
    <h2>Tasks</h2>

    <div class="px-6 py-1">
        <div class="button-create">
            <a href="{{ route('tasks.create') }}" class="btn-new">New Task +</a>
        </div>

        <ul>
            @foreach($tasks as $task)
            <li class="py-2">
                <div class="task-name">
                    <p> {{ $task->name }} </p>
                </div>

                <div class="task-label">
                    <span>{{ $task->label }}</span>
                </div>

                <div class="icons">
                    <div class="icon-edit">
                        <a href="/task/{{ $task->id }}/edit">
                            <x-eos-edit width="24" height="24" style="color: #f59e0b;" />
                        </a>
                    </div>

                    <div class="icon-delete">
                        <form action="/task/{{ $task->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">
                                <x-eos-delete width="24" height="24" style="color: #ef4444;" />
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>

    {{ $tasks->onEachSide(1)->links() }}
</section>

@endsection