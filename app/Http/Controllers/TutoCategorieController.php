<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tuto_categorie;

class TutoCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutocats = Tuto_categorie::all();
        return view('tutocategories.index', compact('tutocats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutocategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tuto_categorie::create(request()->all());
        return redirect()->route('/tutocategories')->with('success', 'Catégorie ajouté!');
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
        $tutocat = Tuto_categorie::find($id);
        return view('tutocategories.edit');

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
        $tutocat = Tuto_categorie::find($id);
        $tutocat->update($request->all());
        $tutocat->save();
        return redirect('/tutocategories')->with('success', 'Catégorie mise à jour !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutocat = Tuto_categorie::find($id);
        $tutocat->delete();

        return redirect('/tutocategories')->with('success', 'Catégorie supprimé !');

    }
}
