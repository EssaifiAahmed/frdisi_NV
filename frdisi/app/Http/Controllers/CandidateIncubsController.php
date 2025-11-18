<?php

namespace App\Http\Controllers;

use App\Models\candidateIncubs;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use ZipArchive;

class CandidateIncubsController extends Controller
{
    public function InsertCondidaProject(Request $request)
    {
        // 1) Validation minimale et cohérente avec le wizard
        $request->validate([
            'radio_group'       => 'required|in:binome_non,binome_oui',
            'nom'               => 'required|string|max:255',
            'prenom'            => 'required|string|max:255',
            'cin'               => 'required|string|max:50',
            'Tele'              => 'required|string|max:50',
            'email'             => 'required|email',
            'age'               => 'required|integer|min:15|max:120',
            'formation'         => 'required|string|max:255',
            'parcourpro'        => 'required|string|max:1000',

            'cinPDf'            => 'required|file|mimes:pdf,jpeg,png,jpg|max:4096',
            'cvPdfp1'           => 'required|file|mimes:pdf|max:4096',
            'diplomePdfp1'      => 'required|file|mimes:pdf|max:4096',

            'nom_entreprise'    => 'required|string|max:255',
            'date_creation'     => 'required|date',
            'statut_entreprise' => 'required|string|max:255',
            'Adresse_siege'     => 'required|string|max:1000',
            'presentation_startup' => 'required|string|max:1000',
            'secteur_activite'  => 'required|string|max:255',
            'description_projet'=> 'required|string',
            'contexte'          => 'required|string',
            'caractere_innovant'=> 'required|string',
            'impact'            => 'required|string|max:255',
            'resultat_attends'  => 'required|string|max:255',
            'stade_avancement'  => 'required|string|max:255',
            'temps_developpement'=> 'required|string|max:255',
            'decription_offre'  => 'required|string',
            'cible'             => 'required|string|max:255',
            'potentiel_marche'  => 'required|string',
            'modele_economique' => 'required|string',
            'avantage_concurrentiel' => 'required|string',
            'strategie_commercial'=> 'required|string',
            'partenaire_commerciaux'=> 'required|string',

            'dossier_juridique' => 'required|file|mimes:pdf|max:4096',
            'devis'             => 'required|file|mimes:pdf|max:4096',
        ]);

        // 2) Respect de votre logique binôme
        if (! in_array($request->input('radio_group'), ['binome_non', 'binome_oui'], true)) {
            return redirect()->back()->withErrors(['radio_group' => 'Veuillez indiquer si vous êtes en binôme.']);
        }

        // 3) Vérifier l’inscription unique par CIN ou CIN2
        $Check_Inscription = DB::table('candidateincubs')
            ->where('cin', $request->input('cin'))
            ->orWhere('cin2', $request->input('cin2'))
            ->first();

        if ($Check_Inscription) {
            return redirect()
                ->back()
                ->withErrors(['cin' => 'Une candidature avec ce CIN existe déjà.'])
                ->withInput();
        }

        // 4) Gestion des fichiers (votre logique)
        $totalFiles             = count($request->file());
        $successfullyMovedFiles = 0;

        foreach ($request->file() as $name => $file) {
            $directory = storage_path('app/public/Dossier_inscription/' . $request->nom . '_' . $request->prenom . '/');
            $fileName  = $name . '.pdf'; // vous renommez tout en .pdf

            if (! is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            if ($file->move($directory, $fileName)) {
                $successfullyMovedFiles++;
            }
        }

        if ($totalFiles > 0 && $successfullyMovedFiles !== $totalFiles) {
            return redirect()->back()->with('error', 'Erreur lors de l’enregistrement des fichiers.');
        }

        // 5) Enregistrement en base (garder votre mapping complet)
        $Candidateincubs                         = new candidateIncubs();
        $Candidateincubs->nom                    = $request->input('nom');
        $Candidateincubs->prenom                 = $request->input('prenom');
        $Candidateincubs->cin                    = $request->input('cin');
        $Candidateincubs->telephone              = $request->input('Tele');
        $Candidateincubs->email                  = $request->input('email');
        $Candidateincubs->age                    = $request->input('age');
        $Candidateincubs->formation              = $request->input('formation');
        $Candidateincubs->parcourpro             = $request->input('parcourpro');
        $Candidateincubs->autreinfos             = $request->input('autreinfos');
        $Candidateincubs->ecp                    = $request->input('ecp');

        $Candidateincubs->nom2                   = $request->input('nom2');
        $Candidateincubs->prenom2                = $request->input('prenom2');
        $Candidateincubs->cin2                   = $request->input('cin2');
        $Candidateincubs->telephone2             = $request->input('Tele2');
        $Candidateincubs->email2                 = $request->input('email2');
        $Candidateincubs->age2                   = $request->input('age2');
        $Candidateincubs->formation2             = $request->input('formation2');
        $Candidateincubs->parcourpro2            = $request->input('parcourpro2');
        $Candidateincubs->autreinfos2            = $request->input('autreinfos2');
        $Candidateincubs->ecp2                   = $request->input('ecp2');

        $Candidateincubs->nom_entreprise         = $request->input('nom_entreprise');
        $Candidateincubs->date_creation          = $request->input('date_creation');
        $Candidateincubs->statut_entreprise      = $request->input('statut_entreprise');
        $Candidateincubs->Adresse_siege          = $request->input('Adresse_siege');
        $Candidateincubs->presentation_startup   = $request->input('presentation_startup');
        $Candidateincubs->secteur_activite       = $request->input('secteur_activite');
        $Candidateincubs->site_internet          = $request->input('site_internet');

        $Candidateincubs->contexte               = $request->input('contexte');
        $Candidateincubs->description_projet     = $request->input('description_projet');
        $Candidateincubs->caractere_innovant     = $request->input('caractere_innovant');
        $Candidateincubs->impact                 = $request->input('impact');
        $Candidateincubs->resultat_attends       = $request->input('resultat_attends');
        $Candidateincubs->stade_avancement       = $request->input('stade_avancement');
        $Candidateincubs->temps_developpement    = $request->input('temps_developpement');
        $Candidateincubs->decription_offre       = $request->input('decription_offre');
        $Candidateincubs->cible                  = $request->input('cible');
        $Candidateincubs->potentiel_marche       = $request->input('potentiel_marche');
        $Candidateincubs->modele_economique      = $request->input('modele_economique');
        $Candidateincubs->avantage_concurrentiel = $request->input('avantage_concurrentiel');
        $Candidateincubs->strategie_commercial   = $request->input('strategie_commercial');
        $Candidateincubs->partenaire_commerciaux = $request->input('partenaire_commerciaux');

        $Candidateincubs->Rubrique_de_depenses   = $request->input('Rubrique_de_depenses'); // si vous alimentez via JS
        $Candidateincubs->description            = $request->input('description');
        $Candidateincubs->montant_sf             = $request->input('montant_sf');
        $Candidateincubs->source_de_financement  = $request->input('source_de_financement');
        $Candidateincubs->pourcentage            = $request->input('pourcentage');

        $Candidateincubs->montant_frais          = $request->input('montant_frais');
        $Candidateincubs->montant_apport         = $request->input('montant_apport');
        $Candidateincubs->montant_amenagement    = $request->input('montant_amenagement');
        $Candidateincubs->montant_compte         = $request->input('montant_compte');
        $Candidateincubs->montant_materielEq     = $request->input('montant_materielEq');
        $Candidateincubs->montant_dette          = $request->input('montant_dette');
        $Candidateincubs->montant_mobilier       = $request->input('montant_mobilier');
        $Candidateincubs->montant_subvention     = $request->input('montant_subvention');
        $Candidateincubs->montant_materielBur    = $request->input('montant_materielBur');
        $Candidateincubs->montant_BesoinFd       = $request->input('montant_BesoinFd');
        $Candidateincubs->total_besoin           = $request->input('montant_totalBesoins');
        $Candidateincubs->total_ressources       = $request->input('montant_totalRessources');
        $Candidateincubs->completedFile          = 1;

        $Candidateincubs->save();

        // 6) Génération du PDF de reçu
        $pdf = Pdf::loadView('recu_incubation', [
            'candidate' => $Candidateincubs,
        ]);

        return $pdf->download('recu_candidature_incubation.pdf');
    }

    public function downloadZippedFolder($nom, $prenom, $cin)
    {
        $folderName = $nom . '_' . $prenom;
        $folderPath = storage_path('app/public/Dossier_inscription/' . $folderName);
        $zipFilePath = storage_path('app/public/Dossier_inscription/' . $folderName . '/' . $folderName . '.zip');

        if (! extension_loaded('zip')) {
            throw new \Exception('The Zip extension is not enabled on your server.');
        }

        if (! is_dir($folderPath)) {
            throw new \Exception('Folder not found: ' . $folderPath);
        }

        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            throw new \Exception('Failed to create zip file');
        }

        $files = glob($folderPath . '/*.pdf');
        foreach ($files as $file) {
            $zip->addFile($file, basename($file));
        }

        $zip->close();

        $headers = [
            'Content-Type' => 'application/octet-stream',
        ];

        register_shutdown_function(function () use ($zipFilePath) {
            if (file_exists($zipFilePath)) {
                unlink($zipFilePath);
            }
        });

        return response()->download($zipFilePath, $folderName . '.zip', $headers);
    }

    public function main()
    {
        $countIncubs   = DB::table('candidateincubs')->count();
        $countDocotrat = DB::table('condidatures')->count();

        return view('backend.views.adminpanel')->with([
            'countIncubs'   => $countIncubs,
            'countDocotrat' => $countDocotrat,
        ]);
    }

    public function showCandidateDetail($id)
    {
        $projetdetail = DB::table('candidateincubs')->where('id', $id)->first();
        // return view('auth.details', ['projetdetail' => $projetdetail]);
    }

    public function findCandidateDetail(Request $request, $id)
    {
        $candidate = candidateIncubs::findOrFail($id);
        // ... gardez votre mapping de mise à jour ici si besoin ...
        $candidate->completedFile = 1;
        $candidate->update();
    }

    public function getDataIncubs(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('candidateincubs')->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
