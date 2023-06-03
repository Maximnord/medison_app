
@extends('dashboard')

@section('content')

@if (Session::has('message'))
    <div class="bg-green-200 border rounded border-b border-green-500 text-green-700 px-4 py-3 m-2" role="alert">
        <p class="font-bold">
            {{ Session::get('message') }}
        </p>
    </div>
@endif

<div class="grid grid-cols-3">
    
    <div class="col-span-1 p-2 ">
        <div class="w-full px-6 py-3 border bg-gray-100 rounded-t dark:bg-gray-700">
                <h1 class="text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400 ">Add country</h1>
            </div>
        <div class="bg-white border-gray-500 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
            
            <form class="" method="POST">
                @csrf
                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">Name</label>
                <input 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="name"
                    id="name" 
                    type="text" 
                    placeholder="Name">

                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">ISO</label>
                <input 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="iso"
                    id="iso" 
                    type="text" 
                    placeholder="ISO">
                
                <button 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>

    <div class="col-span-2">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded m-2 overflow-hidden dark:border-gray-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">#</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Iso</th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                    </tr>
                </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($countries as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                            {{ ++$i }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            {{ $item->name }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            {{ $item->iso }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('countries.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="text-green-500 font-bold hover:text-green-700 mr-2" href="{{ route('countries.edit', $item->id) }}">Edit</a>
                                <button type="submit" class="text-red-500 font-bold hover:text-red-700 ">Delete</button>
                            </form>
                            
                            {{-- <a class="text-red-500 font-bold hover:text-red-700" href="#">Delete</a> --}}
                        </td> 
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="font-semibold text-center p-3">
                            No countries in the list...
                        </td>
                    </tr>
                    {{-- <div class="flex justify-center mt-4"> --}}
                        {{-- {{ $item->links() }} --}}
                    {{-- </div> --}}
                    
                    @endforelse
                </tbody>
                
                </table>
            </div>
            </div>
        </div>
</div>
    </div>
</div>

@stop