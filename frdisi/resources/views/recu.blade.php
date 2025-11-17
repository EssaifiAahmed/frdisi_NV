<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Candidature proteur de projet</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="row mb-2">
                <div class="col">
                    <center><img src="{{ public_path('logoFrdisi.png')}}" alt=""></center>
                </div>
            </div>
            <h1>Fiche inscription</h1>
            <section class="mb-4">
                <div class="row">
                    <h2>1èr condidat de porteur projet</h2>
                    <table>
                        <tr>
                            <td id="header">Nom et prénom:</td>
                            <td>{{ $request->input('nom') }}
                                {{ $request->input('prenom') }}</td>
                        </tr>

                        <tr>
                            <td id="header">CIN:</td>
                            <td>{{ $request->input('cin') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Téléphone:</td>
                            <td>{{ $request->input('Tele') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Adresser mail:</td>
                            <td>{{ $request->input('email') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Age:</td>
                            <td>{{ $request->input('age') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Formation:</td>
                            <td>{{ $request->input('formation') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Parcour professionnel:</td>
                            <td>{{ $request->input('parcourpro') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Autre informations:</td>
                            <td>{{ $request->input('autreinfos') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Expérience commune préalable:</td>
                            <td>{{ $request->input('ecp') }}</td>
                        </tr>

                    </table>
                </div>
            </section>
            <section class="mb-3">
                <div class="row">
                    <h2>2ème condidat de porteur projet</h2>
                    <table>
                        <tr>
                            <td id="header">Nom et prénom:</td>
                            <td>{{ $request->input('nom2') }}
                                {{ $request->input('prenom2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">CIN:</td>
                            <td>{{ $request->input('cin2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Téléphone:</td>
                            <td>{{ $request->input('Tele2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Adresser mail:</td>
                            <td>{{ $request->input('email2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Age:</td>
                            <td>{{ $request->input('age2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Formation:</td>
                            <td>{{ $request->input('formation2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Parcour professionnel:</td>
                            <td>{{ $request->input('parcourpro2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Autre informations:</td>
                            <td>{{ $request->input('autreinfos2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Expérience commune préalable:</td>
                            <td>{{ $request->input('ecp2') }}</td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class="mb-3">
                <div class="row">
                    <h2>Projet</h2>
                    <table>
                        <tr>
                            <td id="header">nom de l'entreprise:</td>
                            <td>{{ $request->input('nom_entreprise') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Date création:</td>
                            <td>{{ $request->input('date_creation') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Statut de l'entreprise:</td>
                            <td>{{ $request->input('statut_entreprise') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Adresse du siège social:</td>
                            <td>{{ $request->input('Adresse_siege') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Présentation de la Startup:</td>
                            <td>{{ $request->input('presentation_startup') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Secteur d'activité:</td>
                            <td>{{ $request->input('secteur_activite') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Site internet:</td>
                            <td>{{ $request->input('site_internet') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Autre informations:</td>
                            <td>{{ $request->input('autreinfos2') }}</td>
                        </tr>

                        <tr>
                            <td id="header">Description du projet:</td>
                            <td>{{ $request->input('description_projet') }}</td>
                        </tr>
                    </table>
                </div>
            </section>
        </main>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </body>
</html>