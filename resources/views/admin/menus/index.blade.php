<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-white rounded-lg">New Menu</a>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Image
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Description
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $menu)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $menu->name }}
                            </th>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($menu->image) }}" alt="" class="w-16 h-16 rounded">
                            </th>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $menu->description }}
                            </th>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $menu->price }}
                            </th>

                            <td class="py-4 px-6">
                                <div class="flex space-x-2 items-center">
                                    <a href="{{route('admin.menus.edit', $menu->id )}}"
                                       class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{route('admin.menus.destroy', $menu->id)}}"
                                          class="py-3 px-6 bg-red-500 hover:bg-red-700 rounded-lg text-gray-500"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
