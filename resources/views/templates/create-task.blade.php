@extends('index')

@section('content')
<div class="form bg-white shadow-md h-2/3 w-2/4 p-20 flex flex-col justify-center items-center rounded mx-auto">
    <form action="{{ route('store') }}" method="post" class="w-full mx-auto flex flex-col justify-center">
        @csrf
        <div class="input-name">
            <label for="name" class="block uppercase tracking-wide text-violet-400 text-base font-semibold font-sans mb-2">Task Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="text-sm font-sans appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:bg-white focus:outline-violet-500" />
        </div>

        <div class="input-label">
            <label for="label" class="block uppercase tracking-wide text-violet-400 text-base font-semibold font-sans mb-2">Days of Week:</label>
            <input type="text" id="label" name="label" placeholder="Days of Week" class="text-sm font-sans appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:bg-white focus:outline-violet-500" />
        </div>

        <div class="flex items-center justify-end">
            <div class="btn-save mr-4">
                <button type="submit" class="bg-green-400 hover:bg-green-500 text-white text-sm font-bold py-3 px-10 rounded">Save</button>
            </div>

            <div class="btn-cancel">
                <a href="{{ route('tasks') }}" class="no-underline bg-red-400 hover:bg-red-500 text-white text-sm font-bold py-3 px-10 rounded">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection