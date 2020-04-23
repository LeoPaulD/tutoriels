<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutoriel;
use App\Tuto_categorie;

class TutorielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutoriels.index', [
            'tutoriels' => Tutoriel::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutocat = new Tuto_categorie(request()->all());
        
        $tutocats = $tutocat::all(['id','titre'])->sortBy("titre");;


        return view('tutoriels.create', compact('tutocats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tutoriel::create(request()->all());
        return redirect()->route('/tutoriels')->with('success', 'Tutoriel ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutoriel = Tutoriel::find($id);
        return view('tutoriels.edit', compact('tutoriel'));
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
        $tutoriel = Tutoriel::find($id);
        $tutoriel->update($request->all());
        $tutoriel->save();
        return redirect('/tutoriels')->with('success', 'Tutoriel mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutoriel = Tutoriel::find($id);
        $tutoriel->delete();
        return redirect('/tutoriels')->with('success', 'Tutoriel supprimé !');
    }
}
