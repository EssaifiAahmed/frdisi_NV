<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class candidateIncubs extends Model
{
    use HasFactory;
     protected $table = 'candidateincubs';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'cin',
        'telephone',
        'email',
        'age',
        'formation',
        'parcourpro',
        'autreinfos',
        'ecp',
        'nom2',
        'prenom2',
        'cin2',
        'telephone2',
        'email2',
        'age2',
        'formation2',
        'parcourpro2',
        'autreinfos2',
        'ecp2',
        'nom_entreprise',
        'date_creation',
        'statut_entreprise',
        'Adresse_siege',
        'presentation_startup',
        'secteur_activite',
        'site_internet',
        'contexte',
        'description_projet',
        'caractere_innovant',
        'impact',
        'resultat_attends',
        'stade_avancement',
        'temps_developpement',
        'decription_offre',
        'cible',
        'potentiel_marche',
        'modele_economique',
        'avantage_concurrentiel',
        'strategie_commercial',
        'partenaire_commerciaux',
        'Rubrique_de_depenses',
        'description',
        'montant_sf',
        'source_de_financement',
        'pourcentage',
        'montant_frais',
        'montant_apport',
        'montant_amenagement',
        'montant_compte',
        'montant_materielEq',
        'montant_dette',
        'montant_mobilier',
        'montant_subvention',
        'montant_materielBur',
        'montant_BesoinFd',
        'total_besoin',
        'total_ressources',
        'completedFile',
    ];
}
