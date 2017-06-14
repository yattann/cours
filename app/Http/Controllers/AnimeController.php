<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Saison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimeController extends Controller
{
    public function index()
    {


        $animes = Anime::all();

        return view('anime.index',['animes' => $animes]);
    }
    public function create()
    {
        return view('anime.create');
    }
    public function show($id)
    {
        $animes= Anime::find($id);
        $lesEpisodes = DB::select('select * from episodes where id_animes = :idAnimes', ['idAnimes' =>$id]);
        $lesSaisons = Saison::all()->where("id_animes", $id);
        return view('anime.anime',['animes' => $animes,"lesEpisodes" => $lesEpisodes, "lesSaisons" =>$lesSaisons]);
    }
    public function edit($id)
    {

        $anime = Anime::findOrFail($id);
        Session::flash('alert-class', 'alert-success');
        Session::flash('message', 'Votre message a été édité!');
        return view('anime.edit',['anime' => $anime]);

    }
    public function update(Request $request, $id)
    {
        $nom = $request->get('nom');
        $slug = $request->get('slug');
        $desc = $request->get('desc');
        $photo= $request->get('photo');

        $anime = Article::find($id);

        $anime->setAttribute('nom',$nom);
        $anime->setAttribute('slug',$slug);
        $anime->setAttribute('desc',$desc);
        $anime->setAttribute('photo',$photo);
        $anime->save();

        $anime = Article::all();
        return view('anime.index',['animes'=>$animes]);



    }
}
