<x-app-layout>
    @section('course')
        <div class="container">
            <div class="flex content-center flex-col mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="bg-green-400 rounded-lg py-5 px-6 text-base text-gray-700" role="alert">
                                    {{ session('status') }}

                                </div>
                                <button type="button"
                                    class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="alert" aria-label="Close">
                        </div>
                        @endif
                        <div class="container mx-auto">
                            <div class="grid grid-cols-3 mt-10">
                                <div class="col-start-2">
                                    <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data">
                                        <h2 class="text-center text-lg">Titulo</h2>
                                        <div class="form-group justify-center">
                                            <input type="text" name="title"
                                                class="form-control block
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
                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                required>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="">Imagen</label>
                                            <input type="file" name="file" class="form-control">
                                        </div> --}}
                                        <h1 class="text-center text-lg">Description</h1>
                                        <div class="form-group mb-6">
                                            <input type="text" name="description"
                                                class="form-control block
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
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                required>
                                        </div>
                                        <div class="form-group mb-6">
                                            @csrf
                                            <button
                                                class=" w-full
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
                                            ease-in-out"
                                                type="submit" value="enviar">Enviar</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- </div>
                </div>
            </div>
        </div> --}}
                        {{-- </div> --}}
    </x-app-layout>
