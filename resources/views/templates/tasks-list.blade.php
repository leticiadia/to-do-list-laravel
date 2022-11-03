@extends('index')

@section('content')

<section class="tasks-list shadow-lg h-2/3 w-2/4 p-20">
    <div class="flex items-center justify-between px-5 py-1">
        <div class="title">
            <h2>Tasks</h2>
        </div>

        <div class="form-search">
            <form action="{{ route('tasks.search') }}" method="get">
                <div class="flex items-stretch justify-end">
                    <input type="search" name="query" placeholder="Find your task" class="form-control block w-1/2 px-3 py-1.5 mx-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-violet-600 focus:outline-none" aria-label="Search" aria-describedby="button-addon2">
                    <button type="submit" class="btn px-6 py-2.5 bg-violet-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-violet-500 hover:shadow-lg focus:bg-violet-500  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

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
        <div class="pagination">
            {{ $tasks->links('templates.paginationlinks') }}
        </div>

    </div>
</section>

@endsection