@extends('index')

@section('content')
<div class="form bg-white shadow-lg h-96 w-2/4 p-20 rounded mx-auto ">
    <form action="/task/{{ $task->id }}" method="post" class="w-full max-w-lg mx-auto flex flex-col justify-center">
        @method('PUT')
        @csrf
        <div class="input-name">
            <label for="name" class="block uppercase tracking-wide text-violet-500 text-base font-bold mb-2">Task Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="text-sm appearance-none block w-full bg-gray-100 text-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-violet-500" value="{{ $task->name }}" />
        </div>

        <div class="input-label">
            <label for="label" class="block uppercase tracking-wide text-violet-500 text-base font-bold mb-2">Days of Week:</label>
            <input type="text" id="label" name="label" placeholder="Days of Week" class="text-sm appearance-none block w-full bg-gray-100 text-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-violet-500" value="{{ $task->label }}" />
        </div>

        <div class="flex items-center justify-end mt-2">
            <div class="btn-save mr-4">
                <button type="submit" class="bg-green-400 hover:bg-green-500 text-white text-sm font-bold py-3 px-10 rounded">Save</button>
            </div>

            <div class="btn-cancel">
                <button onclick="{{ route('tasks') }}" class="bg-red-400 hover:bg-red-500 text-white text-sm font-bold py-3 px-10 rounded">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection