@extends('layouts.app')

@section('content')
{{--  <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
</div>
@endif
<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm lg:shadow-lg">
</section>
</div> --}}
<section class="py-10 bg-gray-300">
    <div class="container mx-auto px-4">
        <div class=" flex flex-col break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
            <div class="px-6">
                <div class="flex flex-wrap justify-center ">
                    <div class="w-full h-8 px-4 flex justify-center">
                        <div class="relative bg-white">
                            <img src="https://img.icons8.com/cotton/64/000000/gender-neutral-user--v3.png"
                                class="shadow-xl rounded-full  bg-white  h-auto align-middle border-none absolute -m-8 -ml-18 lg:mx-auto"
                                style="max-width: 150px;" />

                        </div>
                    </div>
                    <div class="w-full px-6 mb-1">
                        <div class="flex flex-col ">
                            <div class="flex flex-row justify-center pl-4 py-4 lg:pt-4 pt-8">
                                <div class=" p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-gray-700">22</span><span
                                        class="text-sm text-gray-500">Gain/Perte</span>
                                </div>
                                <div class="mx-6 p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-gray-700">10</span><span
                                        class="text-sm text-gray-500">Balance</span>
                                </div>
                                <div class=" p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-gray-700">06</span><span
                                        class="text-sm text-gray-500">Paris Live</span>
                                </div>

                            </div>
                            <div class="flex justify-center p-4 ">
                                <button
                                    class="bg-blue-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-lg px-4 py-2 rounded outline-none focus:outline-none sm:mr-4 mb-1">Retrait</button>
                                <button
                                    class="bg-blue-500 active:bg-blue-600 uppercase text-white font-bold hover:shadow-md shadow text-lg px-4 py-2 rounded outline-none focus:outline-none sm:mr-4 mb-1">Depot</button>
                            </div>
                        </div>


                    </div>

                    {{-- 
                    
                        
                    </div>
                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                        <div class="py-6 px-3 mt-32 sm:mt-0">
                            <button
                                class="bg-blue-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                                type="button" style="transition: all 0.15s ease 0s;">
                                Connect
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="text-center mt-12">
                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                        Jenna Stones
                    </h3>
                    <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                        <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                        Los Angeles, California
                    </div>
                    <div class="mb-2 text-gray-700 mt-10">
                        <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>Solution Manager - Creative Tim
                        Officer
                    </div>
                    <div class="mb-2 text-gray-700">
                        <i class="fas fa-university mr-2 text-lg text-gray-500"></i>University of Computer Science
                    </div>
                </div>
                <div class="mt-10 py-10 border-t border-gray-300 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-9/12 px-4">
                            <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                An artist of considerable range, Jenna the name taken by
                                Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                performs and records all of his own music, giving it a
                                warm, intimate feel with a solid groove structure. An
                                artist of considerable range.
                            </p>
                            <a href="#pablo" class="font-normal text-pink-500">Show more</a>
                        </div>
                    </div>
                </div>
                --}}

                </div>
            </div>
        </div>
</section>
@endsection