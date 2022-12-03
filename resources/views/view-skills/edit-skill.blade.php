<x-app-layout>

    @section('content')
    <div class="container mx-auto">
        <div class="grid grid-cols-3 mt-10">
            <div class="col-start-2">
                <div class="text-lg text-center py-1 uppercase">Editar Artículo</div>
                <div class="card bg-white border-2 rounded">
                    <div class="card-body">
                        @if (session()->has('status'))
                        <div class="bg-blue-100 rounded-lg py-5 px-6 mb-4 text-base text-blue-700 mb-3" role="alert">
                            {{ session('status') }}
                          </div>
                        @endif

                            <form action="{{ route('skill.update',$skill) }}" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <h1 class="text-lg text-center mt-2">Título</h1 class="text-lg">
                                <input type="text" name="title" class="form-control block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required value="{{ old('title', $skill->title) }}">
                            </div>
                            {{-- <div class="form-group">
                                <h1 class="text-lg">image </h1 class="text-lg">
                                <input type="file" name="file" value=">{{ old('image', $post->image) }}">
                            </div> --}}
                            <div class="form-group">
                                <h1 class="text-lg text-center mt-2">Description</h1 class="text-lg">
                                <input name="description" type="text" class="form-control block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required value="{{ old('description', $skill->description) }}" >
                            </div>
                            <div class="form-group mt-5 mb-2">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Actualizar" class="w-full
                                px-6
                                py-2.5
                                bg-blue-600
                                text-white
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                rounded
                                shadow-md
                                hover:bg-blue-700 hover:shadow-lg
                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-blue-800 active:shadow-lg
                                transition
                                duration-150
                                ease-in-out">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-app-layout>
