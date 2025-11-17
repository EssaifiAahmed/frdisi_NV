<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidature Doctorat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td {

            padding: 10px;
            border: 1px solid #111111;
            text-align: left;
            vertical-align: top;
        }

        table td:first-child {
            font-weight: bold;
            background-color: #f2f2f2;
            min-width: 200px;
        }

        .checkmark-circle {
            width: 40px;
            height: 40px;
            position: relative;
        }

        .checkmark {
            position: absolute;
            top: 35%;
            left: 15%;
            width: 10px;
            height: 20px;
            border: solid #73ffa6;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg) translateY(-50%);
        }
    </style>
</head>

<body>
    <main>
        <div class="row mb-2">
            <div class="col">
                <center><img src="{{ public_path('logoFrdisi.png') }}" alt=""></center>
            </div>
        </div>

        <section class="mb-4">
            <div class="row">
                <table>
                    <tr>
                        <td id="header">Nom et prénom:</td>
                        <td>{{ $request->input('Nom') }}
                            {{ $request->input('Prenom') }}</td>
                    </tr>

                    <tr>
                        <td id="header">CIN:</td>
                        <td>{{ $request->input('cin') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Date de naissance:</td>
                        <td>{{ $request->input('date_naissance') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Email:</td>
                        <td>{{ $request->input('email') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Téléphone:</td>
                        <td>{{ $request->input('Tele') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Adresse:</td>
                        <td>{{ $request->input('adresse') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Sexe:</td>
                        <td>{{ $request->input('Sexe') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Ville:</td>
                        <td>{{ $request->input('ville') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Nationalité:</td>
                        <td>{{ $request->input('nat') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Dernier Diplôme obtenu:</td>
                        <td>{{ $request->input('dip') }}</td>
                    </tr>

                    <tr>
                        <td id="header">Filière du dernier diplome obtenu:</td>
                        <td>{{ $request->input('filiere') }}</td>
                    </tr>
                </table>
            </div>
        </section>

        <section>
            <div class="row mb-3">
                <div class="col-12">
                    <h5>
                        <u>Documents relevés:</u>
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Demande manuscrite adressée à Mr le Président de la Fondation</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Lettre de motivation</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Copie certifiée conforme des diplômes et des attestations (Master,
                        Ingénieurd'Etat, DESA, Licence, Bac...)</h6>
                </div>
            </div>

            <div class="row ">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Les diplômes étrangers doivent, impérativement, avoir une attestation
                        d'équivalence</h6>
                </div>
            </div>

            <div class="row ">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Copie certifiée conforme des relevés de notes obtenues durant tout le
                        cursus universitaire</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Photocopie légalisee de la carte d'identité nationale</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• 2 photos d'identité</h6>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-6" style="align-self: center;">
                    <h6 style="color:#6b833b">• Curriculum vitae avec photo du candidat</h6>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6 class="text-center" style="border: 1px solid #111111;">Valider!</h6>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
