<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condidature;
use Barryvdh\DomPDF\Facade\Pdf;
use ZipArchive;
use Yajra\DataTables\Facades\Datatables;

class CondidatureController extends Controller
{
    public function InsertCondida(Request $request)
    {
        $Check_Inscription = Condidature::where('cin', $request->cin)->where('nom', $request->Nom)->where('prenom', $request->Prenom)->first();

        if (!$Check_Inscription) {
            $totalFiles = count($request->file());
            $successfullyMovedFiles = 0;

            foreach ($request->file() as $name => $file) {
                $directory = storage_path('app/public/Dossier_Condidature_doctoral_2025/' . $request->Nom . '_' . $request->Prenom . '_' . $request->cin . '/');
                $fileName = $name . '.pdf';

                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true);
                }

                if ($file->move($directory, $fileName)) {
                    $successfullyMovedFiles++;
                }
            }

            if ($successfullyMovedFiles === $totalFiles) {
                $candidature = new Condidature;
                $candidature->nom = $request->Nom;
                $candidature->prenom = $request->Prenom;
                $candidature->cin = $request->cin;
                $candidature->date_naissance = $request->date_naissance;
                $candidature->email = $request->email;
                $candidature->tele = $request->Tele;
                $candidature->FiliereDDO = $request->filiere;
                $candidature->DDO = $request->dip;
                $candidature->DescriptionPP = $request->desc;
                $candidature->adresse = $request->adresse;
                $candidature->Sexe = $request->Sexe;
                $candidature->nat = $request->nat;
                $candidature->ville = $request->ville;
                $candidature->completedFile = 1;
                $candidature->save();

                $pdf = Pdf::loadView('recu_candidature', compact('request'));
                return response()->json([
                    'pdf' => base64_encode($pdf->output()),
                    'message' => 'Done',
                ], 200);
            }
        }

        return response()->json([
            'message' => 'Error',
        ], 200);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Condidature::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function downloadZippedFolderDoctorat($lang, $nom, $prenom, $cin)
    {
        $folderName = $nom . '_' . $prenom . '_' . $cin;
        $folderPath = storage_path('app/public/Dossier_Condidature_doctoral_2025/' . $folderName);

        $zipFilePath = storage_path('app/public/Dossier_Condidature_doctoral_2025/' . $folderName . '/' . $folderName . '.zip');

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        $zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE);

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
}
