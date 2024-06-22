<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idee;
use App\Models\Categorie;

class IdeeController extends Controller
{
    public function ajout(){

        $categories = Categorie::all();

        return view('idees.formulaire',compact('categories'));
    }


    public function traiter(Request $request){
      
      Idee::create($request->all()) ;

      return redirect('/');
    }

    public function lister(){

        $idees = Idee::all();

        return view('idees.liste',compact('idees'));
    }

    public function detailsIdee($id)
{
    $idee = Idee::findOrFail($id);
    
    return view('idees.detail', compact('idee'));
}

}
