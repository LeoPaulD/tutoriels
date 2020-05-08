<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tutoriel;
use App\Tuto_categorie;

class TutorielController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index($tutocategorie)
    {   
        $objettutocategorie = Tuto_categorie::findOrFail($tutocategorie);
        
        $categories = DB::table('tuto_categories')->orderBy('id', 'asc')->get();
        if($tutocategorie == 1){
            $tutoriels =  DB::table('tutoriels')->get();
        }else {
            $tutoriels =  DB::table('tutoriels')->where('categorie_id' , $tutocategorie )->get();
        }
        
        return view('tutoriels.index', compact('categories', 'tutoriels'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutocat = new Tuto_categorie(request()->all());
        
        $tutocats = $tutocat::all(['id','titre'])->sortBy("titre");


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
    public function edit($categorie_id, Tutoriel $tutoriel)
    {
        $tutocat = new Tuto_categorie(request()->all());
        $tutocats = $tutocat::all(['id','titre'])->sortBy("titre");
        return view('tutoriels.edit', compact('tutocats', 'tutoriel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($categorie_id, Request $request,  Tutoriel $tutoriel)
    {
       
        $tutoriel->update($request->all());
        $categorie = $request->categorie_id;
        $tutoriel->save();
        return redirect()->route('tutocategories.tutoriels.index', $categorie)->with('success', 'Tutoriel mis à jour !');
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
