<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idee;
use App\Models\Categorie;
use App\Mail\IdeeValidee;
use App\Mail\IdeenonValidee;
use Illuminate\Support\Facades\Mail;

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

// fonction pour traiter les actions sur les idess approbation ou pas
public function ideeAction(Request $request, $id, $action)
{
    $idee = Idee::find($id);

    if (!$idee) {
        return back()->with('error', 'Idée non trouvée');
    }

    switch ($action) {
        case 'Approuvée':
            Mail::to($idee->email)->send(new IdeeValidee($idee));
            return back()->with('success', 'Idée approuvée et email envoyé');
            break;

        case 'Non approuvée':
            Mail::to($idee->email)->send(new IdeenonValidee($idee));
            return back()->with('success', 'Idée non approuvée et email envoyé');
            break;

        case 'delete':
            $idee->delete();
            return back()->with('success', 'Idée supprimée');
            break;

        default:
            return back()->with('error', 'Action non reconnue');
    }
}

}
