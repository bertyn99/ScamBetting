@extends('layouts.app')

@section('content')
<section class="py-10 ">
    <div class="container mx-auto px-4">
        <div class=" flex flex-col break-words bg-white w-full mb-6 shadow-xl rounded-lg ">
            <div class="px-6">
                <div class="flex items-center w-full bg-teal-lighter">
                    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
                        <h3 class="text-center font-bold text-gray-800 text-2xl mb-4">Dépot</h3>
                        <form action="{{ route('deposit.index') }}" class="mb-4 md:flex md:flex-wrap md:justify-between"
                            method="post">
                            @csrf
                            @method('POST')
                            <div class="field-group mb-4 md:w-1/2">
                                <label class="mb-2 uppercase font-bold text-lg text-gray-600" for="nom_jeu">Montant du
                                    dépot</label>
                                <input type="number" min=5 id="nom-form" name="montant" placeholder="Montant du dépot">
                            </div>

                            <button
                                class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                                type="submit">Ajouter</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection