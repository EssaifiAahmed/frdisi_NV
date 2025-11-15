@extends('layouts.master')
@section('content')
    <!-- PAGE HEADER -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center">
            <h1 class="display-3">Candidature pour Incubation</h1>
        </div>
    </div>

    <style>
        .wizard-step {
            display: none;
        }

        .wizard-step.active {
            display: block;
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .step-indicator .step {
            width: 100%;
            text-align: center;
            padding: 10px;
            border-bottom: 3px solid #ccc;
            font-weight: bold;
            color: #888;
        }

        .step-indicator .step.active {
            border-color: #28a745;
            color: #28a745;
        }

        .ecp_class {
            display: none !important;
        }
    </style>

    <div class="container py-5">
        <form action="#" method="POST" enctype="multipart/form-data" id="wizardForm">
            @csrf

            <!-- ===========================
                                 WIZARD STEP INDICATOR
                            =========================== -->
            <div class="step-indicator">
                <div class="step step-1 active">1. Porteur(s) de Projet</div>
                <div class="step step-2">2. Fiche Projet</div>
                <div class="step step-3">3. Financement</div>
            </div>

            <!-- ==========================================
                                 STEP 1 – TOUTES LES INFORMATIONS PORTEURS
                            ========================================== -->
            <div class="wizard-step active" id="step1">

                <!-- Binôme -->
                <div class="row">
                    <div class="col-md-12 form-group" style="text-transform: uppercase; font-weight:600; font-size: 103%;">
                        <label><small>Êtes-vous en binôme ?</small></label>
                        <label class="ms-2">
                            <input type="radio" name="radio_group" value="binome_oui"> <small>Oui</small>
                        </label>
                        <label class="ms-2">
                            <input type="radio" name="radio_group" value="binome_non"> <small>Non</small>
                        </label>
                    </div>
                </div>

                <!-- ============================
                                     1er PORTEUR DE PROJET
                                ============================ -->
                <div class="row mb-3">
                    <div class="col-md-4 form-group mt-3">
                        <h5><u>1er porteur de projet :</u></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label><small>Nom :</small></label>
                        <input type="text" name="nom" class="form-control" id="nomp1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <label><small>Prénom :</small></label>
                        <input type="text" name="prenom" class="form-control" id="prenomp1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <label><small>CIN :</small></label>
                        <input type="text" class="form-control" name="cin" id="cinp1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Téléphone :</small></label>
                        <input type="tel" class="form-control" name="Tele" id="telep1" pattern="\d{8,15}"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Email :</small></label>
                        <input type="email" class="form-control" name="email" id="emailp1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Âge :</small></label>
                        <input type="number" class="form-control" name="age" id="agep1" min="15"
                            max="120" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Formation :</small></label>
                        <input type="text" class="form-control" name="formation" id="formationp1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Parcours professionnel :</small></label>
                        <input type="text" class="form-control" name="parcourpro" id="parcourprop1" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label><small>Autres informations :</small></label>
                        <input type="text" class="form-control" name="autreinfos" id="autreinfosp1">
                    </div>

                    <div class="col-md-12 form-group mt-3 ecp_class" id="ecp_porteur_1">
                        <label><small>Expérience commune préalable :</small></label>
                        <textarea class="form-control" name="ecp" id="ecpp1"></textarea>
                    </div>
                </div>

                <!-- Dossier personnel porteur 1 -->
                <div class="row mb-2 mt-3">
                    <div class="col-md-6 form-group">
                        <h5 style="text-transform: uppercase;"><u>Dossier personnel du 1er porteur :</u></h5>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 form-group" style="text-transform: uppercase; font-size:140%;">
                        <label><small><u>CIN portant adresse Casablanca-Settat ?</u></small></label>
                        <label class="ms-2">
                            <input type="radio" name="radioadressp1" value="adresse_oui"> <small>Oui</small>
                        </label>
                        <label class="ms-2">
                            <input type="radio" name="radioadressp1" value="adresse_non"> <small>Non</small>
                        </label>
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <label><small>CIN (PDF/image) :</small></label>
                        <input type="file" class="form-control" name="cinPDf" id="cinPDfp1"
                            accept="application/pdf,image/*" required>
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <label><small>Attestation de résidence :</small></label>
                        <input type="file" class="form-control" name="attesres" id="attresp1"
                            accept="application/pdf,image/*">
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <label><small>CV :</small></label>
                        <input type="file" class="form-control" name="cvPdfp1" id="cvPdfp1"
                            accept="application/pdf" required>
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <label><small>Diplômes :</small></label>
                        <input type="file" class="form-control" name="diplomePdfp1" id="diplomePdfp1"
                            accept="application/pdf" required>
                    </div>
                </div>

                <!-- ============================
                                     2e PORTEUR DE PROJET
                                ============================ -->
                <div class="row mb-3">
                    <div class="col-md-4 form-group mt-5">
                        <h5><u>2ème porteur de projet :</u></h5>
                    </div>
                </div>

                <div id="porteur2_zone">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label><small>Nom :</small></label>
                            <input type="text" name="nom2" class="form-control" id="nomp2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Prénom :</small></label>
                            <input type="text" name="prenom2" class="form-control" id="prenomp2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>CIN :</small></label>
                            <input type="text" class="form-control" name="cin2" id="cinp2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Téléphone :</small></label>
                            <input type="tel" class="form-control" name="Tele2" id="telep2"
                                pattern="\d{8,15}">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Email :</small></label>
                            <input type="email" class="form-control" name="email2" id="emailp2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Âge :</small></label>
                            <input type="number" class="form-control" name="age2" id="agep2" min="15"
                                max="120">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Formation :</small></label>
                            <input type="text" class="form-control" name="formation2" id="formationp2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Parcours professionnel :</small></label>
                            <input type="text" class="form-control" name="parcourpro2" id="parcourprop2">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label><small>Autres informations :</small></label>
                            <input type="text" class="form-control" name="autreinfos2" id="autreinfosp2">
                        </div>

                        <div class="col-md-12 form-group mt-3 ecp_class" id="ecp_porteur_2">
                            <label><small>Expérience commune préalable :</small></label>
                            <textarea class="form-control" name="ecp2" id="ecpp2"></textarea>
                        </div>

                        <!-- Dossier personnel 2 -->
                        <div class="row mb-2 mt-3">
                            <div class="col-md-6 form-group">
                                <h5><u>Dossier personnel du 2ème porteur :</u></h5>
                            </div>
                        </div>

                        <div class="col-md-12 form-group" style="text-transform: uppercase; font-size:140%;">
                            <label><small><u>CIN portant adresse Casablanca-Settat ?</u></small></label>
                            <label class="ms-2">
                                <input type="radio" name="radioadressp2" value="adressoui"> <small>Oui</small>
                            </label>
                            <label class="ms-2">
                                <input type="radio" name="radioadressp2" value="adressnon"> <small>Non</small>
                            </label>
                        </div>

                        <div class="col-md-6 form-group mt-3">
                            <label><small>CIN (PDF/image) :</small></label>
                            <input type="file" class="form-control" name="cinPDf2" id="cinPDfp2"
                                accept="application/pdf,image/*">
                        </div>

                        <div class="col-md-6 form-group mt-3">
                            <label><small>Attestation de résidence :</small></label>
                            <input type="file" class="form-control" name="attresPdf2" id="attresp2"
                                accept="application/pdf,image/*">
                        </div>

                        <div class="col-md-6 form-group mt-3">
                            <label><small>CV :</small></label>
                            <input type="file" class="form-control" name="cvPdf2" id="cvPdfp2"
                                accept="application/pdf">
                        </div>

                        <div class="col-md-6 form-group mt-3">
                            <label><small>Diplômes :</small></label>
                            <input type="file" class="form-control" name="diplomePdfp2" id="diplomePdfp2"
                                accept="application/pdf">
                        </div>

                    </div>
                </div> <!-- END PORTEUR 2 ZONE -->

                <div class="text-end mt-4">
                    <button type="button" class="btn btn-success" id="next1">Suivant →</button>
                </div>
            </div>
            <!-- ========================================== STEP 2 – FICHE PROJET ========================================== -->
            <div class="wizard-step" id="step2">
                {{-- =========================== IDENTIFICATION DU PROJET ============================ --}}
                <div class="row mb-3 mt-4">
                    <div class="col-md-4 form-group">
                        <h5><u>IDENTIFICATION DU PROJET :</u></h5>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 form-group">
                        <label for="nom_entreprise"><small>Nom de l'entreprise :</small></label>
                        <input type="text" class="form-control" name="nom_entreprise" id="nom_entreprise" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="date_creation"><small>Date de création :</small></label>
                        <input type="date" class="form-control" name="date_creation" id="date_creation" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="statut_entreprise"><small>Statut de l'entreprise :</small></label>
                        <input type="text" class="form-control" name="statut_entreprise" id="statut_entreprise"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="Adresse_siege"><small>Adresse du siège social :</small></label>
                        <input type="text" class="form-control" name="Adresse_siege" id="Adresse_siege" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="presentation_startup"><small>Présentation de la Startup :</small></label>
                        <input type="text" class="form-control" name="presentation_startup" id="presentation_startup"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="secteur_activite"><small>Secteur d'activité :</small></label>
                        <input type="text" class="form-control" name="secteur_activite" id="secteur_activite"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="site_internet"><small>Site internet :</small></label>
                        <input type="text" class="form-control" name="site_internet" id="site_internet">
                    </div>
                </div>

                {{-- =========================== DESCRIPTION DU PROJET ============================ --}}
                <div class="row mb-3 mt-4">
                    <div class="col-md-4 form-group">
                        <h5><u>DESCRIPTION DU PROJET :</u></h5>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 form-group mt-3">
                        <label for="description_projet">Description du projet :</label>
                        <textarea class="form-control" name="description_projet" id="description_projet"
                            placeholder="Décrire clairement votre idée..." required></textarea>
                    </div>

                    <div class="col-md-12 form-group mt-3">
                        <label for="contexte">Contexte / Problématique :</label>
                        <textarea class="form-control" name="contexte" id="contexte" placeholder="Quelle problématique résolvez-vous ?"
                            required></textarea>
                    </div>

                    <div class="col-md-12 form-group mt-3">
                        <label for="caractere_innovant">Caractère innovant du projet :</label>
                        <textarea class="form-control" name="caractere_innovant" id="caractere_innovant"
                            placeholder="Expliquez l’innovation et ce qui différencie votre projet..." required></textarea>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="impact">Impact :</label>
                        <input type="text" class="form-control" name="impact" id="impact"
                            placeholder="Impact social, environnemental..." required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="resultat_attends">Résultats attendus :</label>
                        <input type="text" class="form-control" name="resultat_attends" id="resultat_attends"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="stade_avancement">Stade d'avancement technique :</label>
                        <select name="stade_avancement" id="stade_avancement" class="form-select" required>
                            <option disabled selected></option>
                            <option value="Pilote ou pré-industrialisation">Pilote / Pré-industrialisation</option>
                            <option value="Prototype ou preuve de concept">Prototype / Preuve de concept</option>
                            <option value="Étude de faisabilité">Étude de faisabilité</option>
                            <option value="Cahier des charges">Cahier des charges</option>
                        </select>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="temps_developpement">Temps de développement :</label>
                        <select name="temps_developpement" id="temps_developpement" class="form-select" required>
                            <option disabled selected></option>
                            <option value="Pré-commercialisation">Pré-commercialisation</option>
                            <option value="1 an">1 an</option>
                            <option value="2 ans">2 ans</option>
                            <option value="Plus de 2 ans">Plus de 2 ans</option>
                        </select>
                    </div>
                </div>

                {{-- =========================== ÉTUDE DU PROJET ============================ --}}
                <div class="row mb-3 mt-5">
                    <div class="col-md-4 form-group">
                        <h5><u>ETUDE DU PROJET :</u></h5>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 form-group mt-3">
                        <label for="decription_offre">Description de l’offre :</label>
                        <textarea class="form-control" name="decription_offre" id="decription_offre" placeholder="Vos services ou produits…"
                            required></textarea>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="cible">Cible :</label>
                        <input type="text" class="form-control" name="cible" id="cible" required>
                    </div>

                    <div class="col-md-8 form-group mt-3">
                        <label for="potentiel_marche">Potentiel marché :</label>
                        <input type="text" class="form-control" name="potentiel_marche" id="potentiel_marche"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="modele_economique">Modèle économique :</label>
                        <input type="text" class="form-control" name="modele_economique" id="modele_economique"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="avantage_concurrentiel">Avantages concurrentiels :</label>
                        <input type="text" class="form-control" name="avantage_concurrentiel"
                            id="avantage_concurrentiel" required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="strategie_commercial">Stratégie commerciale :</label>
                        <input type="text" class="form-control" name="strategie_commercial" id="strategie_commercial"
                            required>
                    </div>

                    <div class="col-md-4 form-group mt-3">
                        <label for="partenaire_commerciaux">Partenaires commerciaux :</label>
                        <select name="partenaire_commerciaux" id="partenaire_commerciaux" class="form-select" required>
                            <option disabled selected></option>
                            <option value="Déjà des clients">Déjà des clients</option>
                            <option value="Contrats en cours">Contrats en cours de signature</option>
                            <option value="Clients potentiels">Clients potentiels identifiés</option>
                        </select>
                    </div>
                </div>

                {{-- =========================== DOSSIER SUPPLÉMENTAIRE ============================ --}}
                <div class="row mb-3 mt-5">
                    <div class="col-md-4 form-group">
                        <h5><u>DOSSIER SUPPLÉMENTAIRE :</u></h5>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 form-group mt-3">
                        <label><small>Documents pertinents :</small></label>
                        <input type="file" class="form-control" name="documents" id="documents"
                            accept="application/pdf,image/*">
                    </div>

                    <div class="col-md-6 form-group mt-3">
                        <label><small>Dossier juridique de la société :</small></label>
                        <input type="file" class="form-control" name="dossier_juridique" id="dossier_juridique"
                            accept="application/pdf" required>
                    </div>

                </div>

                <!-- Navigation -->
                <div class="d-flex justify-content-between mt-5">
                    <button type="button" class="btn btn-secondary" id="prev2">← Retour</button>
                    <button type="button" class="btn btn-success" id="next2">Suivant →</button>
                </div>

            </div>
            <!-- ========================================== STEP 3 – FINANCEMENT DU PROJET + SCRIPTS (FINAL) ========================================== -->
            <div class="wizard-step" id="step3">

                <div class="section-title">
                    <h2>Financement du projet</h2>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 form-group">
                        <h5><u>SOURCES DU FINANCEMENT :</u></h5>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    <table class="table table-striped" id="dynamic-table">
                        <thead style="text-align: center;">
                            <tr>
                                <th scope="col">Rubrique de dépenses</th>
                                <th scope="col">Description</th>
                                <th scope="col">Montant</th>
                                <th scope="col">Source de financement</th>
                                <th scope="col">Part en %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- rows added dynamically -->
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success" id="add-row">Ajouter une ligne</button>
                </div>

                <div class="row mb-4 mt-4">
                    <div class="col-md-4 form-group">
                        <h5><u>BESOINS ET RESSOURCES :</u></h5>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    <table id="table" class="table table-bordered">
                        <tr>
                            <th colspan="2">Besoins</th>
                            <th colspan="2">Ressources</th>
                        </tr>
                        <tr>
                            <th>Rubrique</th>
                            <th>Montant</th>
                            <th>Rubrique</th>
                            <th>Montant</th>
                        </tr>
                        <tr>
                            <td>Frais d’établissement</td>
                            <td><input type="number" step="0.01" name="montant_frais" class="form-control besoin">
                            </td>
                            <td>Apport en capital</td>
                            <td><input type="number" step="0.01" name="montant_apport"
                                    class="form-control ressource"></td>
                        </tr>
                        <tr>
                            <td>Aménagement et installations</td>
                            <td><input type="number" step="0.01" name="montant_amenagement"
                                    class="form-control besoin"></td>
                            <td>Compte courant</td>
                            <td><input type="number" step="0.01" name="montant_compte"
                                    class="form-control ressource"></td>
                        </tr>
                        <tr>
                            <td>Matériel et Equipements</td>
                            <td><input type="number" step="0.01" name="montant_materielEq"
                                    class="form-control besoin"></td>
                            <td>Dette bancaire</td>
                            <td><input type="number" step="0.01" name="montant_dette"
                                    class="form-control ressource"></td>
                        </tr>
                        <tr>
                            <td>Mobilier de bureau</td>
                            <td><input type="number" step="0.01" name="montant_mobilier"
                                    class="form-control besoin"></td>
                            <td>Subvention</td>
                            <td><input type="number" step="0.01" name="montant_subvention"
                                    class="form-control ressource"></td>
                        </tr>
                        <tr>
                            <td>Matériel de bureau</td>
                            <td><input type="number" step="0.01" name="montant_materielBur"
                                    class="form-control besoin"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Besoin en fond de roulement (BFR)</td>
                            <td><input type="number" step="0.01" name="montant_BesoinFd"
                                    class="form-control besoin"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total besoins</td>
                            <td><input type="text" id="total_besoins" class="form-control" readonly></td>
                            <td>Total ressources</td>
                            <td><input type="text" id="total_ressources" class="form-control" readonly></td>
                        </tr>
                    </table>
                </div>

                <div class="row mb-3 mt-4">
                    <div class="col-md-4 form-group">
                        <h5><u>Devis / Facture Proforma :</u></h5>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    <label for="devis"><small>Documents pertinents :</small></label>
                    <input type="file" class="form-control" name="devis" id="devis" accept="application/pdf"
                        required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary" id="prev3">← Retour</button>
                    <button type="submit" class="btn btn-success" id="submitBtn">Envoyer la candidature</button>
                </div>
            </div>
        </form>

        <!-- =========================== WIZARD & FORM SCRIPTS =========================== -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                /* ----------------------------
                   Step navigation + validation
                ---------------------------- */
                const steps = Array.from(document.querySelectorAll('.wizard-step'));
                const indicators = Array.from(document.querySelectorAll('.step'));
                let currentStep = 1;

                const showStep = (n) => {
                    // bounds
                    if (n < 1) n = 1;
                    if (n > steps.length) n = steps.length;
                    currentStep = n;

                    steps.forEach((s, i) => {
                        s.classList.toggle('active', i === n - 1);
                    });
                    indicators.forEach((ind, i) => {
                        ind.classList.toggle('active', i === n - 1);
                    });

                    // scroll to top of form for user convenience
                    window.scrollTo({
                        top: document.getElementById('wizardForm').offsetTop - 20,
                        behavior: 'smooth'
                    });
                };

                // prev/next buttons
                document.getElementById('next1').addEventListener('click', function() {
                    if (!validateStep(1)) return;
                    showStep(2);
                });

                document.getElementById('next2').addEventListener('click', function() {
                    if (!validateStep(2)) return;
                    showStep(3);
                });

                document.getElementById('prev2').addEventListener('click', function() {
                    showStep(1);
                });
                document.getElementById('prev3').addEventListener('click', function() {
                    showStep(2);
                });

                // Form submit guard: validate all steps
                const form = document.getElementById('wizardForm');
                form.addEventListener('submit', function(e) {
                    if (!validateStep(1) || !validateStep(2) || !validateStep(3)) {
                        e.preventDefault();
                        alert(
                            'Veuillez remplir correctement toutes les sections obligatoires avant de soumettre.'
                        );
                        return false;
                    }
                    // else allow submit (it will post the form)
                });

                // Basic step validation: checks visible step for required fields
                function validateStep(stepNumber) {
                    const stepEl = steps[stepNumber - 1];
                    const requiredFields = stepEl.querySelectorAll('[required]');
                    let valid = true;

                    // Reset previous error styles
                    requiredFields.forEach(f => f.classList.remove('is-invalid'));

                    requiredFields.forEach(field => {
                        // For file inputs, check files.length
                        if (field.type === 'file') {
                            if (!field.files || field.files.length === 0) {
                                field.classList.add('is-invalid');
                                valid = false;
                            }
                            return;
                        }

                        // For radios: require one selected in the group (handle by name)
                        if (field.type === 'radio') {
                            // We'll check radio groups only once per name
                            const name = field.name;
                            if (stepEl.querySelectorAll(`input[name="${name}"]`).length > 0) {
                                const anyChecked = Array.from(stepEl.querySelectorAll(`input[name="${name}"]`))
                                    .some(r => r.checked);
                                if (!anyChecked) {
                                    // mark all radios in this group
                                    Array.from(stepEl.querySelectorAll(`input[name="${name}"]`)).forEach(r => r
                                        .classList.add('is-invalid'));
                                    valid = false;
                                }
                            }
                            return;
                        }

                        // Normal inputs/textarea/select
                        if ((field.value === '' || field.value == null)) {
                            field.classList.add('is-invalid');
                            valid = false;
                        } else if (field.type === 'email') {
                            // simple email validation
                            const re = /^\S+@\S+\.\S+$/;
                            if (!re.test(field.value)) {
                                field.classList.add('is-invalid');
                                valid = false;
                            }
                        }
                    });

                    if (!valid) {
                        // Focus first invalid
                        const firstInvalid = stepEl.querySelector('.is-invalid');
                        if (firstInvalid) firstInvalid.focus();
                    }

                    return valid;
                }

                /* ----------------------------
                   Binôme toggles (enable/disable 2nd porteur)
                ---------------------------- */
                const radioBinome = document.querySelectorAll('input[name="radio_group"]');
                const porteur2Zone = document.getElementById('porteur2_zone');
                const porteur2Fields = porteur2Zone ? porteur2Zone.querySelectorAll('input, textarea, select') : [];

                // By default disable porteur2 fields
                porteur2Fields.forEach(i => i.disabled = true);
                // show/hide experience blocks based on ecp_class presence is handled later

                radioBinome.forEach(r => {
                    r.addEventListener('change', (e) => {
                        if (e.target.value === 'binome_oui') {
                            porteur2Fields.forEach(i => i.disabled = false);
                            // reveal experience blocks if needed
                            document.getElementById('ecp_porteur_2')?.classList.remove('ecp_class');
                        } else {
                            porteur2Fields.forEach(i => {
                                // keep files cleared if disabling to avoid accidental upload
                                if (i.type === 'file') i.value = '';
                                i.disabled = true;
                            });
                            document.getElementById('ecp_porteur_2')?.classList.add('ecp_class');
                        }
                    });
                });

                /* ----------------------------
                   CIN / Attestation toggles for both porteurs
                ---------------------------- */
                function setupRadioToggle(radioName, cinId, attId) {
                    const radios = document.querySelectorAll(`input[name="${radioName}"]`);
                    const cin = document.getElementById(cinId);
                    const att = document.getElementById(attId);
                    radios.forEach(r => {
                        r.addEventListener('change', (e) => {
                            if (e.target.value.includes('oui')) {
                                if (cin) cin.disabled = false;
                                if (att) att.disabled = true;
                                if (att) att.value = '';
                            } else {
                                if (cin) cin.disabled = false;
                                if (att) att.disabled = false;
                            }
                        });
                    });
                }

                setupRadioToggle('radioadressp1', 'cinPDfp1', 'attresp1');
                setupRadioToggle('radioadressp2', 'cinPDfp2', 'attresp2');

                /* ----------------------------
                   Dynamic finance rows
                ---------------------------- */
                const rubriques = [
                    "Acquisition licence, logiciels et abonnements",
                    "Achat de marchandises",
                    "Aménagement et installations",
                    "Autres",
                    "B.F.R",
                    "Brevet, marques et valeurs similaires",
                    "Charges de personnel",
                    "Charges locatives",
                    "Equipements",
                    "Frais préliminaires",
                    "Frais de communication",
                    "Frais étude",
                    "Frais de déplacement",
                    "Frais approche + dédouanement",
                    "Frais assurance",
                    "Honoraires",
                    "Matériel et outillage",
                    "Mobilier et matériel de bureau",
                    "Système information"
                ];

                const addRowBtn = document.getElementById('add-row');
                const dynamicTbody = document.querySelector('#dynamic-table tbody');

                addRowBtn.addEventListener('click', function() {
                    const tr = document.createElement('tr');

                    tr.innerHTML = `
                        <td>
                            <select class="form-select rubrique-select" name="Rubrique_de_depenses[]">
                                ${rubriques.map(r => `<option value="${r}">${r}</option>`).join('')}
                            </select>
                        </td>
                        <td><textarea class="form-control description-field" name="description[]"></textarea></td>
                        <td><input type="number" step="0.01" class="form-control montant" name="montant_sf[]"></td>
                        <td><input type="number" step="0.01" class="form-control source" name="source_de_financement[]"></td>
                        <td><input type="text" class="form-control pourcentage" name="pourcentage[]" readonly></td>
                    `;

                    // add event listeners for calculation
                    const montant = tr.querySelector('.montant');
                    const source = tr.querySelector('.source');
                    const percent = tr.querySelector('.pourcentage');

                    function calcRow() {
                        const m = parseFloat(montant.value) || 0;
                        const s = parseFloat(source.value) || 0;
                        percent.value = m > 0 ? ((s / m) * 100).toFixed(2) : '0.00';
                    }

                    montant.addEventListener('input', calcRow);
                    source.addEventListener('input', calcRow);

                    dynamicTbody.appendChild(tr);
                });

                /* ----------------------------
                   Calculate totals for besoins & ressources
                ---------------------------- */
                function calcTotals() {
                    let totalB = 0,
                        totalR = 0;
                    document.querySelectorAll('.besoin').forEach(el => totalB += parseFloat(el.value) || 0);
                    document.querySelectorAll('.ressource').forEach(el => totalR += parseFloat(el.value) || 0);
                    document.getElementById('total_besoins').value = totalB.toFixed(2);
                    document.getElementById('total_ressources').value = totalR.toFixed(2);
                }

                document.querySelectorAll('.besoin, .ressource').forEach(i => {
                    i.addEventListener('input', calcTotals);
                });

                // initial totals calc in case there are preset values
                calcTotals();

                /* ----------------------------
                   Small UX: remove 'is-invalid' on input when user edits
                ---------------------------- */
                document.querySelectorAll('input, textarea, select').forEach(el => {
                    el.addEventListener('input', () => el.classList.remove('is-invalid'));
                    el.addEventListener('change', () => el.classList.remove('is-invalid'));
                });

            });
        </script>
    </div>
@endsection
