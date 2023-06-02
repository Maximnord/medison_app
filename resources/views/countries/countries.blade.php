
@extends('dashboard')

@section('content')
<div class="grid grid-cols-3">
    <div class="col-span-1 p-2 ">
        <div class="w-full px-6 py-3 border bg-gray-100 rounded-t dark:bg-gray-700">
                <h1 class="text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400 ">Add country</h1>
            </div>
        <div class="bg-white border-gray-500 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
            
            <form class="">

                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">Name</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
                <label class="block mt-4 text-gray-700 text-sm font-bold mb-2" for="username">ISO</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
                
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
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
                    @foreach ($countries as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $item->id }}</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $item->name }}</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $item->iso }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a class="text-blue-500 hover:text-blue-700" href="#">Delete</a>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
</div>
    </div>
</div>

@stop