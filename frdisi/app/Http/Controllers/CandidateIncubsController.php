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
        if (($request->input('radio_group') == 'binome_non') || ($request->input('radio_group') == 'binome_oui')) {
            $Check_Inscription = candidateIncubs::where('nom', $request->input('nom'))->where('prenom', $request->input('prenom'))->first();
            if (! $Check_Inscription) {
                $totalFiles             = count($request->file());
                $successfullyMovedFiles = 0;
                foreach ($request->file() as $name => $file) {
                    $directory = public_path('Dossier_inscription/' . $request->nom . '_' . $request->prenom . '/');
                    $fileName  = $name . '.pdf';

                    if (! is_dir($directory)) {
                        mkdir($directory, 0777, true);
                    }

                    if ($file->move($directory, $fileName)) {
                        $successfullyMovedFiles++;
                    }
                }
                if ($successfullyMovedFiles === $totalFiles) {
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
                    $Candidateincubs->Rubrique_de_depenses   = $request->input('Rubrique_de_depenses');
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

                    $pdf = Pdf::loadView('recu', compact('request'));
                    return $pdf->download('recu_inscription.pdf');
                }
            }
        }
        return redirect()->back();
    }

    public function downloadZippedFolder($lang, $nom, $prenom)
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

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            throw new \Exception('Failed to create zip file');
        } else {
            $zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE);
        }

        // Add all the PDF files to the zip archive
        $files = glob($folderPath . '/*.pdf');
        foreach ($files as $file) {
            $zip->addFile($file, basename($file));
        }

        // Close the zip archive
        $zip->close();

        // Set the appropriate headers for the download
        $headers = [
            'Content-Type' => 'application/octet-stream',
        ];

        // Delete the temporary zip file after download
        register_shutdown_function(function () use ($zipFilePath) {
            unlink($zipFilePath);
        });

        // Return the zip file as a download response
        return response()->download($zipFilePath, $folderName . '.zip', $headers);
    }

    public function main()
    {
        $countIncubs = DB::table('candidateincubs')->count();
        $countDocotrat = DB::table('condidatures')->count();
        return view('backend.views.adminpanel')->with(['countIncubs' => $countIncubs, 'countDocotrat' => $countDocotrat]);
    }

    public function showCandidateDetail($id)
    {
        $projetdetail = DB::table('candidateincubs')->where('id', $id)->first();
        // return view('auth.details', ['projetdetail' => $projetdetail]);
    }

    public function findCandidateDetail(Request $request, $id)
    {
        $candidate                         = candidateIncubs::findOrFail($id);
        $candidate->nom                    = $request->input('nom');
        $candidate->prenom                 = $request->input('prenom');
        $candidate->cin                    = $request->input('cin');
        $candidate->telephone              = $request->input('Tele');
        $candidate->email                  = $request->input('email');
        $candidate->age                    = $request->input('age');
        $candidate->formation              = $request->input('formation');
        $candidate->parcourpro             = $request->input('parcourpro');
        $candidate->autreinfos             = $request->input('autreinfos');
        $candidate->ecp                    = $request->input('ecp');
        $candidate->nom2                   = $request->input('nom2');
        $candidate->prenom2                = $request->input('prenom2');
        $candidate->cin2                   = $request->input('cin2');
        $candidate->telephone2             = $request->input('Tele2');
        $candidate->email2                 = $request->input('email2');
        $candidate->age2                   = $request->input('age2');
        $candidate->formation2             = $request->input('formation2');
        $candidate->parcourpro2            = $request->input('parcourpro2');
        $candidate->autreinfos2            = $request->input('autreinfos2');
        $candidate->ecp2                   = $request->input('ecp2');
        $candidate->nom_entreprise         = $request->input('nom_entreprise');
        $candidate->date_creation          = $request->input('date_creation');
        $candidate->statut_entreprise      = $request->input('statut_entreprise');
        $candidate->Adresse_siege          = $request->input('Adresse_siege');
        $candidate->presentation_startup   = $request->input('presentation_startup');
        $candidate->secteur_activite       = $request->input('secteur_activite');
        $candidate->site_internet          = $request->input('site_internet');
        $candidate->contexte               = $request->input('contexte');
        $candidate->description_projet     = $request->input('description_projet');
        $candidate->caractere_innovant     = $request->input('caractere_innovant');
        $candidate->impact                 = $request->input('impact');
        $candidate->resultat_attends       = $request->input('resultat_attends');
        $candidate->stade_avancement       = $request->input('stade_avancement');
        $candidate->temps_developpement    = $request->input('temps_developpement');
        $candidate->decription_offre       = $request->input('decription_offre');
        $candidate->cible                  = $request->input('cible');
        $candidate->potentiel_marche       = $request->input('potentiel_marche');
        $candidate->modele_economique      = $request->input('modele_economique');
        $candidate->avantage_concurrentiel = $request->input('avantage_concurrentiel');
        $candidate->strategie_commercial   = $request->input('strategie_commercial');
        $candidate->partenaire_commerciaux = $request->input('partenaire_commerciaux');
        $candidate->Rubrique_de_depenses   = $request->input('Rubrique_de_depenses');
        $candidate->description            = $request->input('description');
        $candidate->montant_sf             = $request->input('montant_sf');
        $candidate->source_de_financement  = $request->input('source_de_financement');
        $candidate->pourcentage            = $request->input('pourcentage');
        $candidate->montant_frais          = $request->input('montant_frais');
        $candidate->montant_apport         = $request->input('montant_apport');
        $candidate->montant_amenagement    = $request->input('montant_amenagement');
        $candidate->montant_compte         = $request->input('montant_compte');
        $candidate->montant_materielEq     = $request->input('montant_materielEq');
        $candidate->montant_dette          = $request->input('montant_dette');
        $candidate->montant_mobilier       = $request->input('montant_mobilier');
        $candidate->montant_subvention     = $request->input('montant_subvention');
        $candidate->montant_materielBur    = $request->input('montant_materielBur');
        $candidate->montant_BesoinFd       = $request->input('montant_BesoinFd');
        $candidate->total_besoin           = $request->input('montant_totalBesoins');
        $candidate->total_ressources       = $request->input('montant_totalRessources');
        $candidate->completedFile          = 1;
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
