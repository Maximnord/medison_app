@extends('dashboard')

@section('content')

<div class="col-span-1 p-2 ">
        <div class="w-full px-6 py-3 border bg-gray-100 rounded-t dark:bg-gray-700">
                <h1 class="text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400 ">Edit Country</h1>
            </div>
        <div class="bg-white border-gray-500 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
            
            <form method="POST" action="{{ route('countries.update', $country->id) }}">
                @csrf
                @method('PUT')
                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">Name</label>
                <input 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="name"
                    id="name" 
                    type="text" 
                    placeholder="Name"
                    value="{{ $country->name }}"
                >

                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">ISO</label>
                <input 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="iso"
                    id="iso" 
                    type="text" 
                    placeholder="ISO"
                    value="{{ $country->iso }}">
                
                <button 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit"
                >
                    Update
                </button>
                <form action="{{ url()->previous() }}" method="GET">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</button>
                </form>
            </form>
        </div>
    </div>

@stop