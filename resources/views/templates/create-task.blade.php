@extends('index')

@section('content')
<div class="form bg-white shadow-lg h-96 w-2/4 p-16 rounded mx-auto ">
    <form action="{{ route('store') }}" method="post" class="w-full max-w-lg flex flex-col justify-center">
        @csrf
        <div class="input-name">
            <label for="name" class="block uppercase tracking-wide text-violet-500 text-base font-bold mb-2">Task Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
        </div>

        <div class="input-label">
            <label for="label" class="block uppercase tracking-wide text-violet-500 text-base font-bold mb-2">Days of Week:</label>
            <input type="text" id="label" name="label" placeholder="Days of Week" class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
        </div>

        <div class="flex items-center justify-end">
            <div class="btn-save mr-4">
                <button type="submit" class="bg-green-400 hover:bg-green-500 text-white text-sm font-bold py-3 px-10 rounded">Save</button>
            </div>

            <div class="btn-cancel">
                <button type="submit" class="bg-red-400 hover:bg-red-500 text-white text-sm font-bold py-3 px-10 rounded">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection