<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-[5%]">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-[#1f2937] dark:bg-[#1f2937] dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($menuCount == 0)
                <div class="flex items-center">
                    <a href="/addMenu" type="button"
                        class="m-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add
                        Menu</a>
                    <h1>No menus available</h1>
                </div>
            @else
                <div class="flex items-center">
                    <a href="/addMenu" type="button"
                        class="m-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add
                        Menu</a>
                    @if ($menuCount == 1)
                        <h1>Total menu : {{ $menuCount }}</h1>
                    @else
                        <h1>Total menus : {{ $menuCount }}</h1>
                    @endif
                </div>

                @foreach ($listMenu as $item)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->name }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $menu->type }}
                        <td class="px-6 py-4">
                            {{ $item->description }}
                        </td>
                        <td class="px-6 py-4 flex align-content-center">
                            <a href="{{ url('editMenu', $item->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <p>&nbsp;|&nbsp;</p>
                            <a href="{{ url('deleteMenu', $item->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div>
        {{ $listMenu->links() }}
    </div>
</div>
