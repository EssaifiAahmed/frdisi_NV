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
            <img src="{{ public_path('logoFrdisi.png') }}" alt="FRDISI" height="60">
            <h2>Reçu de candidature à l’incubation</h2>
        </div>

        <p>Date de génération : {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>

        <h3 class="section-title">Porteur principal</h3>
        <table>
            <tr>
                <td>Nom et prénom</td>
                <td>{{ $candidate->nom }} {{ $candidate->prenom }}</td>
            </tr>
            <tr>
                <td>CIN</td>
                <td>{{ $candidate->cin }}</td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td>{{ $candidate->telephone }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $candidate->email }}</td>
            </tr>
            <tr>
                <td>Âge</td>
                <td>{{ $candidate->age }}</td>
            </tr>
            <tr>
                <td>Formation</td>
                <td>{{ $candidate->formation }}</td>
            </tr>
            <tr>
                <td>Parcours professionnel</td>
                <td>{{ $candidate->parcourpro }}</td>
            </tr>
        </table>

        @if ($candidate->nom2 || $candidate->prenom2)
            <h3 class="section-title">Deuxième porteur</h3>
            <table>
                <tr>
                    <td>Nom et prénom</td>
                    <td>{{ $candidate->nom2 }} {{ $candidate->prenom2 }}</td>
                </tr>
                <tr>
                    <td>CIN</td>
                    <td>{{ $candidate->cin2 }}</td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>{{ $candidate->telephone2 }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $candidate->email2 }}</td>
                </tr>
                <tr>
                    <td>Âge</td>
                    <td>{{ $candidate->age2 }}</td>
                </tr>
                <tr>
                    <td>Formation</td>
                    <td>{{ $candidate->formation2 }}</td>
                </tr>
            </table>
        @endif

        <h3 class="section-title">Projet</h3>
        <table>
            <tr>
                <td>Nom de l’entreprise / projet</td>
                <td>{{ $candidate->nom_entreprise }}</td>
            </tr>
            <tr>
                <td>Date de création</td>
                <td>{{ $candidate->date_creation }}</td>
            </tr>
            <tr>
                <td>Statut de l’entreprise</td>
                <td>{{ $candidate->statut_entreprise }}</td>
            </tr>
            <tr>
                <td>Adresse du siège</td>
                <td>{{ $candidate->Adresse_siege }}</td>
            </tr>
            <tr>
                <td>Secteur d’activité</td>
                <td>{{ $candidate->secteur_activite }}</td>
            </tr>
            <tr>
                <td>Description du projet</td>
                <td>{{ $candidate->description_projet }}</td>
            </tr>
            <tr>
                <td>Contexte / problématique</td>
                <td>{{ $candidate->contexte }}</td>
            </tr>
            <tr>
                <td>Caractère innovant</td>
                <td>{{ $candidate->caractere_innovant }}</td>
            </tr>
            <tr>
                <td>Impact</td>
                <td>{{ $candidate->impact }}</td>
            </tr>
            <tr>
                <td>Résultats attendus</td>
                <td>{{ $candidate->resultat_attends }}</td>
            </tr>
        </table>

        <h3 class="section-title">Financement (synthèse)</h3>
        <table>
            <tr>
                <td>Total besoins</td>
                <td>{{ $candidate->total_besoin }}</td>
            </tr>
            <tr>
                <td>Total ressources</td>
                <td>{{ $candidate->total_ressources }}</td>
            </tr>
        </table>

        <p style="margin-top: 30px;">
            Ce reçu atteste de la bonne réception de votre dossier de candidature à l’incubation.
        </p>
    </main>
</body>

</html>
