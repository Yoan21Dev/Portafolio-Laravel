<div class="min-h-screen bg-orange-300 ">
    @livewire('navbar-component')
    <x-guest-layout></x-guest-layout>

    <div class="container mx-auto px-4 sm:mx-auto sm:container md:container md:mx-auto">
        <div class="grid grid-cols-1 grid-row-1 ">
            <div class="sm:text-center mt-10">
                <h2 class="text-3xl  font-bold leading-8 text-amber-900 text-center sm:text-center">Yoander Robles</h2>
                <center>
                    <p class="mt-2 mb-3 bg-teal-200 bg-no-repeat bg-center px-6 w-64 rounded text-center font-bold text-xl tracking-tight text-gray-900 sm:text-4xl">
                        <span class="">D</span>esarrollador <span> B</span>ackend
                    </p>
                </center>
            </div>
        </div>
        <main id="SobreMi">

        <div class="sm:grid grid-cols-3">
            <div class="grid col-start-1 items-center">
                <div class="flex space-x-2 justify-center">
                    <button type="button" class="inline-block mt-5 mb-3 px-6 py-4 bg-sky-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">
                        contactame
                    </button>
                </div>

            </div>
            <div class="col-start-2 col-span-3 border-1 rounded-lg bg-orange-400 opacity-90 z-0 h-auto w-full hover:text-gray-700 focus:text-gray-700 shadow-lg">
                <div class="col-start-2 col-span-2 w-3/4 h-96 bg-teal-200 rounded-lg opacity-1 z-10 ">
                    <div class="col-start-2 w-4/5 h-96 bg-white bg-opacity-1 rounded-lg z-20">
                        <h1 class="text-xl font-bold text-amber-900 text-center sm:text-center space-y-50 ">Sobre Mi</h1>
                        <p class="text-xs font-bold text-center space-y-50 sm:text-xl md:text-base xl:text-xl">
                            Desarrollador Back-End al lado de servidor y API Rest.
                            Continuamente aprendiendo y adquiriendo nuevas habilidades en función a las actuales y
                            futuras demandas y tendencias tecnológicas en el campo del desarrollo de
                            aplicaciones web en general.
                            Apasionado con el trabajo que realizo, ofreciendo y aportando mis conocimientos,
                            habilidades y experiencia, así como nuevas ideas, soluciones, personalización y
                            seguimiento de calidad al cliente y su objetivo en cada proyecto.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
        </main>
</div>
