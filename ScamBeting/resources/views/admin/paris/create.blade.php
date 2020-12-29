@extends('admin.admin')

@section('bet')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3 class="block w-full text-center text-gray-600 mb-6">Créer un paris</h3>
        <form action={{ route('bet.store') }} class="mb-6" method="post">
            @csrf
            @method('POST')

            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Jeu</label>
                <select id="jeu" name="jeu" autocomplete="jeu"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez un jeu</option>
                    @foreach ($jeux as $jeu)
                    <option value="{{$jeu->slug}}">{{$jeu->nom_jeu}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Equipe 1</label>
                <select id="equipe1" name="equipe1" autocomplete="equipe1"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez le jeu d'abord</option>
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Cote equipe 1</label>
                <input type="float" id="cote-form2" name="cote_equipe1" placeholder="1.0" value="">
            </div>

            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="nom_equipe">Equipe 2</label>
                <select id="equipe2" name="equipe2" autocomplete="equipe2"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez le jeu d'abord</option>
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Cote equipe 2</label>
                <input type="float" id="cote-form1" name="cote_equipe2" placeholder="1.0" value="">
            </div>

            <button class="block bg-blue-700 hover:bg-blue-500 text-white uppercase text-lg mx-auto p-4 rounded"
                type="submit">Ajouter</button>

        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    let jeu=document.querySelector('#jeu')
    let equipe1=document.querySelector('#equipe1')
    let equipe2=document.querySelector('#equipe2')
    let equipes;
    jeu.addEventListener('change',async e=>{
        if(jeu.value!=""){ 
            equipe1.options[0].text="Choissisez l'equipe 1"
            equipe2.options[0].text="Choissisez l'equipe 2"
            equipes=await getList(jeu.value)
         
            updateList(equipes)
        }
    })
   function updateList(list){
 console.log(list)
       //efface les autre option
    while (equipe1.options.length > 1 && equipe2.options.length > 1) {
         equipe1.remove(1); 
         equipe2.remove(1); 
         }
       list.forEach((elem,i) => {
           equipe1[i+1]= new Option(elem.nom_equipe,elem.nom_equipe)
           equipe2[i+1]= new Option(elem.nom_equipe,elem.nom_equipe)
       }); 

   }
   async function getList(slug){
       return new Promise((resolve, reject) => {
        fetch(`http://127.0.0.1:8000/api/${slug}/equipe`)
            .then(response => response.json())
            .then(data=>resolve(data))
       })
   }
</script>
@endpush