@extends('admin.admin')

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('bet')
<div class="flex items-center h-screen w-full bg-teal-lighter">
    <div class="w-full bg-grey-100 rounded shadow-lg p-8 m-4">
        <h3 class="block w-full text-center text-gray-600 mb-6">Créer un paris</h3>
        <form action={{ route('bet.store') }} class="mb-6" method="post">
            @csrf
            @method('POST')

            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_jeu">Jeu</label>
                <select id="jeu" name="jeu" autocomplete="jeu"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez un jeu</option>
                    @foreach ($jeux as $jeu)
                    <option value="{{$jeu->id}}">{{$jeu->nom_jeu}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe">Equipe 1</label>
                <select id="equipe" name="equipe" autocomplete="equipe"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez le jeu d'abord</option>
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="cote_equipe">Cote equipe 1</label>
                <input type="float" class="field" id="cote-form2" name="cote_1" placeholder="1.0" value="">
            </div>

            <div class="flex flex-col mb-4">
                <label class="field-label" for="nom_equipe2">Equipe 2</label>
                <select id="equipe2" name="equipe2" autocomplete="equipe2"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Choissisez le jeu d'abord</option>
                    @foreach ($equipes as $equipe)
                    <option value="{{$equipe->id}}">{{$equipe->nom_equipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="cote_equipe2">Cote equipe 2</label>
                <input type="float" class="field" id="cote-form1" name="cote_2" placeholder="1.0" value="">
            </div>
            <div class="flex flex-col mb-4">
                <label class="field-label" for="date_match">Date du match</label>
                <input type="datetime-local" name="end-bet" class="field" value="">
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
  
    let equipe1=document.querySelector('#equipe')
    let equipe2=document.querySelector('#equipe2')
    let valeur={ e:{ prev:"", cur:""},
    e2:{prev:"", cur:""} }
   
   
    let equipes;
   
    jeu.addEventListener('change',async e=>{
        if(jeu.value!=""){ 
            equipe1.options[0].text="Choissisez l'equipe 1"
            equipe2.options[0].text="Choissisez l'equipe 2" 
            console.log(jeu.options[jeu.selectedIndex].text.toLowerCase().replace(/\s+/g, '-'))
            equipes=await getList(jeu.options[jeu.selectedIndex].text.toLowerCase().replace(/\s+/g, '-'))
        
            updateList(equipes)
        }
    })
   function updateList(list){
       //efface les autre option
    while (equipe1.options.length > 1 && equipe2.options.length > 1) {
         equipe1.remove(1); 
         equipe2.remove(1); 
         }
       list.forEach((elem,i) => {
           equipe1[i+1]= new Option(elem.nom_equipe,elem.id)
           equipe2[i+1]= new Option(elem.nom_equipe,elem.id)
       }); 
       
        valeur.e.cur=equipe1.value;
        valeur.e2.cur=equipe2.value
   }
   equipe1.addEventListener('change',async e=>{
   
        valeur.e.prev=valeur.e.cur
         valeur.e.cur=equipe1.value

    
    for (const option of equipe2) {
           if(option.value==valeur.e.cur){
                option.disabled=true;
           }
           if(option.value==valeur.e.prev){
            option.disabled=false;
           }
       }
       
   })
   equipe2.addEventListener('change',async e=>{ 
   
        valeur.e2.prev=valeur.e2.cur
         valeur.e2.cur=equipe2.value

    for (const option of equipe1) {
           if(option.value==valeur.e2.cur){
                option.disabled=true;
           }
           if(option.value==valeur.e2.prev){
            option.disabled=false;
           }
       }

    })

   async function getList(slug){
       return new Promise((resolve, reject) => {
        fetch(`http://127.0.0.1:8000/api/${slug}/equipe`)
            .then(response => response.json())
            .then(data=>resolve(data))
       })
   }
</script>
@endpush