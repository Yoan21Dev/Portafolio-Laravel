<p> class="text-center font-bold text-lg text-indigo-600">Cursos</p>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($courses as $course)
                        <div class="card border-2 border-indigo-500/100 bg-white-500 rounded">
                            <div class="card-title font-bold text-center">
                                <p> {{ $course->title }}</p>
                            </div>
                            <div class="card-body ">
                                <p>{{ $course->GetExcerpt}} </p>

                            </div>
                        </div>
                    @endforeach
                </div>
                @livewire('button-component')
            </div>
            <h1 class="text-center font-bold text-lg text-indigo-600"> Habilidades </h1>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($skills as $skill)
                    <div class="card border-2 border-indigo-500/100 bg-white rounded shadow-sm shadow-gray-400">
                        <div class="card-title font-bold text-center ">
                            <p>{{ $skill->title }}</p>
                        </div>
                        <div class="card-body ">
                            <p>{{ $skill->GetExcerpt }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
            @livewire('button-component')
            <h1 class="text-center font-bold text-lg text-indigo-600"> Experiencias </h1>
            <div class="grid grid-cols-4 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($experiences as $experience)
                    <div class="card  border-2 border-indigo-500/100 bg-white rounded">
                        <div class="card-title font-bold text-center ">
                            <p>{{ $experience->title }}</p>
                        </div>
                        <div class="card-body ">

                            <p>{{ $experience->GetExcerpt }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @livewire('button-component')
