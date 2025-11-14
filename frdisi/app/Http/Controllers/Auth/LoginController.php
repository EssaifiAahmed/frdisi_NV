<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Models\Candidateincubs;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function main(Request $request)
    {   
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if($request->remember){
            session::put('email', $request->email);
            session::put('password', $request->password);
        }else{
            Session::forget('email');
            Session::forget('password');
        }
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $candidatedetail = DB::table('candidateincubs')->orderBy('id', 'ASC')->get();
            $condidatures = DB::table('condidatures')->orderBy('id', 'ASC')->get();
            return view('auth.main', ['candidatedetail' => $candidatedetail, 'condidatures' => $condidatures]);
        }
  
        return redirect()->route('adminpanel');
    }

    public function showCandidateDetail($id)
    {
            $projetdetail = Candidateincubs::find($id);
            return view('auth.details', ['projetdetail' => $projetdetail]);
    }

    public function findCandidateDetail(Request $request, $id)
    {
            $candidate = Candidateincubs::findOrFail($id);
            $candidate->nom = $request->input('nom');
            $candidate->prenom = $request->input('prenom');
            $candidate->cin = $request->input('cin');
            $candidate->telephone = $request->input('Tele');
            $candidate->email = $request->input('email');
            $candidate->age = $request->input('age');
            $candidate->formation = $request->input('formation');
            $candidate->parcourpro = $request->input('parcourpro');
            $candidate->autreinfos = $request->input('autreinfos');
            $candidate->ecp = $request->input('ecp');
            $candidate->nom2 = $request->input('nom2');
            $candidate->prenom2 = $request->input('prenom2');
            $candidate->cin2 = $request->input('cin2');
            $candidate->telephone2 = $request->input('Tele2');
            $candidate->email2 = $request->input('email2');
            $candidate->age2 = $request->input('age2');
            $candidate->formation2 = $request->input('formation2');
            $candidate->parcourpro2 = $request->input('parcourpro2');
            $candidate->autreinfos2 = $request->input('autreinfos2');
            $candidate->ecp2 = $request->input('ecp2');
            $candidate->nom_entreprise = $request->input('nom_entreprise');
            $candidate->date_creation = $request->input('date_creation');
            $candidate->statut_entreprise = $request->input('statut_entreprise');
            $candidate->Adresse_siege = $request->input('Adresse_siege');
            $candidate->presentation_startup = $request->input('presentation_startup');
            $candidate->secteur_activite = $request->input('secteur_activite');
            $candidate->site_internet = $request->input('site_internet');
            $candidate->contexte = $request->input('contexte');
            $candidate->description_projet = $request->input('description_projet');
            $candidate->caractere_innovant = $request->input('caractere_innovant');
            $candidate->impact = $request->input('impact');
            $candidate->resultat_attends = $request->input('resultat_attends');
            $candidate->stade_avancement = $request->input('stade_avancement');
            $candidate->temps_developpement = $request->input('temps_developpement');
            $candidate->decription_offre = $request->input('decription_offre');
            $candidate->cible = $request->input('cible');
            $candidate->potentiel_marche = $request->input('potentiel_marche');
            $candidate->modele_economique = $request->input('modele_economique');
            $candidate->avantage_concurrentiel = $request->input('avantage_concurrentiel');
            $candidate->strategie_commercial = $request->input('strategie_commercial');
            $candidate->partenaire_commerciaux = $request->input('partenaire_commerciaux');
            $candidate->Rubrique_de_depenses = $request->input('Rubrique_de_depenses');
            $candidate->description = $request->input('description');
            $candidate->montant_sf = $request->input('montant_sf');
            $candidate->source_de_financement = $request->input('source_de_financement');
            $candidate->pourcentage = $request->input('pourcentage');
            $candidate->montant_frais = $request->input('montant_frais');
            $candidate->montant_apport = $request->input('montant_apport');
            $candidate->montant_amenagement = $request->input('montant_amenagement');
            $candidate->montant_compte = $request->input('montant_compte');
            $candidate->montant_materielEq = $request->input('montant_materielEq');
            $candidate->montant_dette = $request->input('montant_dette');
            $candidate->montant_mobilier = $request->input('montant_mobilier');
            $candidate->montant_subvention = $request->input('montant_subvention');
            $candidate->montant_materielBur = $request->input('montant_materielBur');
            $candidate->montant_BesoinFd = $request->input('montant_BesoinFd');
            $candidate->total_besoin = $request->input('montant_totalBesoins');
            $candidate->total_ressources = $request->input('montant_totalRessources');
            $candidate->completedFile = 1;
            $candidate->update();
    }
     
    public function CheckUserBackHome()
    {
        if(Auth::check()){
            $candidatedetail = DB::table('candidateincubs')->orderBy('id', 'ASC')->get();
            $condidatures = DB::table('condidatures')->orderBy('id', 'ASC')->get();
            return view('auth.main', ['candidatedetail' => $candidatedetail, 'condidatures' => $condidatures]);
        }
  
        return redirect()->route('adminpanel');
    }   

    public function logout() {
        Auth::logout();
  
        return redirect()->route('adminpanel');
    }
}
