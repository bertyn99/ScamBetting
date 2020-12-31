<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\{Paris, Equipe, Jeu};

class ParisController extends Controller
{
    //<?php
    /**
     * Display a listing of the resource in admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::all();
        $equipes = Equipe::all();
        $bets = Paris::all();
        return view('admin.paris.index', compact('bets', 'jeux', 'equipes'));
    }

    //<?php
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($slug = null)
    {
        $query = $slug ? Jeu::whereSlug($slug)->firstOrFail()->paris() : Paris::query();
        /* $betfs = $query->withTrashed()->paginate(5); */
        $jeux = Jeu::all();
        $equipes = Equipe::all();
        $bets = Paris::all();
        return view('layouts.app', compact('bets'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jeux = Jeu::all();
        $equipes = Equipe::all();
        $bets = Paris::all();
        return view('admin.paris.create', compact('bets', 'jeux', 'equipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bet = new Paris();
        $bet->id_jeu = $request->jeu;
        $bet->equipes()->attach($request->equipe);
        $bet->equipes()->attach($request->equipe2);
        $bet->cote_1 = $request->get('cote_1');
        $bet->cote_2 = $request->get('cote_2');
        $bet->endbet = $request->get('end-bet');
        dd($request);
        $bet->save();
        return redirect()->route('bet.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bet = Paris::find($id);
        return view('admin.jeu.edit', compact('bet'));
    }


    public function show($id)
    {
        $bet = Paris::find($id);
        $category = $bet->jeu->nom_jeu;
        return view('paris.bet', compact('bet', 'category'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bet = Paris::find($id);
        $bet->id_jeu = $request->jeu;
        $bet->id_equipe_1 = $request->equipe1;
        $bet->id_equipe_2 = $request->equipe2;
        $bet->cote_1 = $request->get('cot_1');
        $bet->cote_2 = $request->get('cot_2');;
        $bet->save();
        return redirect()->route('bet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bet = Paris::find($id);
        $bet->delete();
        return redirect()->route('bet.index');
    }
}
