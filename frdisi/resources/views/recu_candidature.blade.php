<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Reçu de Candidature - Incubation</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 15px;
        }

        table td,
        table th {
            padding: 8px;
            border: 1px solid #111111;
            vertical-align: top;
        }

        table td:first-child {
            font-weight: bold;
            background-color: #f2f2f2;
            width: 35%;
        }

        h2,
        h3 {
            margin: 5px 0;
        }

        .section-title {
            margin-top: 20px;
            margin-bottom: 8px;
            font-size: 14px;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main>
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ public_path('img/logoFrdisi.png') }}" alt="FRDISI" height="60">
            <h2>Reçu de candidature à l’incubation</h2>
        </div>

        <p>Date de génération : {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>

        <h3 class="section-title">Porteur principal</h3>
        <table>
            <tr>
                <td>Nom et prénom</td>
                <td>{{ $Candidateincubs->nom }} {{ $Candidateincubs->prenom }}</td>
            </tr>
            <tr>
                <td>CIN</td>
                <td>{{ $Candidateincubs->cin }}</td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td>{{ $Candidateincubs->telephone }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $Candidateincubs->email }}</td>
            </tr>
            <tr>
                <td>Âge</td>
                <td>{{ $Candidateincubs->age }}</td>
            </tr>
            <tr>
                <td>Formation</td>
                <td>{{ $Candidateincubs->formation }}</td>
            </tr>
            <tr>
                <td>Parcours professionnel</td>
                <td>{{ $Candidateincubs->parcourpro }}</td>
            </tr>
        </table>

        @if ($Candidateincubs->nom2 || $Candidateincubs->prenom2)
            <h3 class="section-title">Deuxième porteur</h3>
            <table>
                <tr>
                    <td>Nom et prénom</td>
                    <td>{{ $Candidateincubs->nom2 }} {{ $Candidateincubs->prenom2 }}</td>
                </tr>
                <tr>
                    <td>CIN</td>
                    <td>{{ $Candidateincubs->cin2 }}</td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>{{ $Candidateincubs->telephone2 }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $Candidateincubs->email2 }}</td>
                </tr>
                <tr>
                    <td>Âge</td>
                    <td>{{ $Candidateincubs->age2 }}</td>
                </tr>
                <tr>
                    <td>Formation</td>
                    <td>{{ $Candidateincubs->formation2 }}</td>
                </tr>
            </table>
        @endif

        <h3 class="section-title">Projet</h3>
        <table>
            <tr>
                <td>Nom de l’entreprise / projet</td>
                <td>{{ $Candidateincubs->nom_entreprise }}</td>
            </tr>
            <tr>
                <td>Date de création</td>
                <td>{{ $Candidateincubs->date_creation }}</td>
            </tr>
            <tr>
                <td>Statut de l’entreprise</td>
                <td>{{ $Candidateincubs->statut_entreprise }}</td>
            </tr>
            <tr>
                <td>Adresse du siège</td>
                <td>{{ $Candidateincubs->Adresse_siege }}</td>
            </tr>
            <tr>
                <td>Secteur d’activité</td>
                <td>{{ $Candidateincubs->secteur_activite }}</td>
            </tr>
            <tr>
                <td>Description du projet</td>
                <td>{{ $Candidateincubs->description_projet }}</td>
            </tr>
            <tr>
                <td>Contexte / problématique</td>
                <td>{{ $Candidateincubs->contexte }}</td>
            </tr>
            <tr>
                <td>Caractère innovant</td>
                <td>{{ $Candidateincubs->caractere_innovant }}</td>
            </tr>
            <tr>
                <td>Impact</td>
                <td>{{ $Candidateincubs->impact }}</td>
            </tr>
            <tr>
                <td>Résultats attendus</td>
                <td>{{ $Candidateincubs->resultat_attends }}</td>
            </tr>
        </table>

        <h3 class="section-title">Financement (synthèse)</h3>
        <table>
            <tr>
                <td>Total besoins</td>
                <td>{{ $Candidateincubs->total_besoin }}</td>
            </tr>
            <tr>
                <td>Total ressources</td>
                <td>{{ $Candidateincubs->total_ressources }}</td>
            </tr>
        </table>

        <p style="margin-top: 30px;">
            Ce reçu atteste de la bonne réception de votre dossier de candidature à l’incubation.
        </p>
    </main>
</body>

</html>
