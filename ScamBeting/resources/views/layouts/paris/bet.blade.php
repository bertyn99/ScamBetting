<section>
    <div class="grid grid-cols-6 gap-2 py-2 px-5">
    betee
        @foreach ($bets as $bet)
        <div class=" bg-white rounded flex flex-row justify-center just p-2 col-span-2 shadow">
            <div class="equipe text-center">
                <div><img src="" alt=""></div>
                <div class="text-center p-1">
                    <h4 class="font-bold text-gray-800"> Equipe title</h4>
                    <div class="mt-2">
                        <span>Cote</span>
                        <button class="w-12 p-1 bg-blue-300 hover:bg-blue-500">5.2</button>
                    </div>
                </div>
            </div>
            <div>
                <span class="font-bold text-lg text-gray-900">VS</span>
            </div>
            <div class="equipe">
                <div><img src="..\resources\img\Fnatic-Logo-Orange-RGB.svg" alt=""></div>
                <div class="text-center p-1">
                    <h4 class="font-bold text-gray-800"> Equipe title</h4>
                    <div class="mt-2">
                        <span>Cote</span>
                        <button class="w-12 p-1 bg-blue-300 hover:bg-blue-500">5.2</button>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- card paris --}}


        </div>


</section>