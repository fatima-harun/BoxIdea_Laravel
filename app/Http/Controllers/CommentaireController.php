<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Models\Idee;

class CommentaireController extends Controller
{
    public function sauvegarder(Request $request, $idee_id){

        // recuperer une idee par son id
        $idee = Idee::find($idee_id);


        Commentaire::create([
            'nom_auteur' => $request->input('nom_auteur'),
            'libelle' => $request->input('libelle'),
            'idee_id' => $idee_id,
        ]);

        return back();
    }

    public function affichercommentaire($id)
    {
        // Récupérer l'idée par son identifiant avec ses commentaires
        $idee = Idee::with('commentaires')->find($id);

        if (!$idee) {
            return redirect('/lister')->with('error', 'Idée non trouvée.');
        }

        // Récupérer les commentaires associés à l'idée
        $commentaires = $idee->commentaires;

        // Retourner la vue 'idees.detail' avec l'idée et ses commentaires
        return view('idees.detail', compact('idee', 'commentaires'));
    }
}
