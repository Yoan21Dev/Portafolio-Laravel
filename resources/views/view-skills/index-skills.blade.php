<x-app-layout>
    <x-slot name="header">

        <form action="{{ route('skill.create') }}" method="GET">

            <button href="" type="submit"
                class="inline-block mt-5 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                <a>Add</a>
            </button>
        </form>

    </x-slot>

    @section('course')

        <div class="py-12">
            @if (session('status'))
                <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="max-w-7xl mx-auto sm:px-6">
                <div class="flex content-center flex-col mt-5 ">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                #
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Title
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Description
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                                            </th>
                                        </tr>
                                    </thead>
                                    @foreach ($skills as $skill)
                                        <tbody>
                                            <tr class="border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $skill->id }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $skill->title }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-4 py-4 whitespace-nowrap">
                                                    {{ $skill->GetExcerpt }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" value="eliminar"
                                                            class="inline-block px-6 py-2.5 bg-red-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="text-sm text-gray-900 font-light py-4">
                                                    <form action="{{ route('skill.edit', $skill) }}" method="GET">
                                                        @csrf
                                                        <button type="submit" value="update"
                                                            class="inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                                            update
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                {{ $skills->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </x-app-layout>
