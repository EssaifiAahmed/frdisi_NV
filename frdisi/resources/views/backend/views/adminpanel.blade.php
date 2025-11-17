@extends('backend.layouts.dashboard')
@section('content')
    <style>
        #projectTable thead th {
            white-space: nowrap;
            font-size: 13px;
            font-weight: 600;
            color: #344767;
        }

        #projectTable tbody td {
            white-space: nowrap;
            font-size: 13px;
        }

        #projectTable_wrapper .dataTables_filter input {
            border-radius: 10px;
            padding: 6px 12px;
            border: 1px solid #d1d7e1;
        }

        .download-btn {
            padding: 4px 10px;
            font-size: 12px;
            border-radius: 8px;
            background: #839a5eb3;
            color: white;
            text-decoration: none;
        }

        .download-btn:hover {
            background: #839A5E;
            color: white;
        }

        .table-responsive {
            overflow-x: auto;
            scrollbar-width: thin;
        }

        .action-btn {
            padding: 4px 8px;
            font-size: 12px;
            border-radius: 6px;
            background: #839a5eb3;
            color: white;
        }

        .action-btn:hover {
            background: #839A5E;
            color: white;
        }

        #doctoratTable thead th {
            white-space: nowrap;
            font-size: 13px;
            font-weight: 600;
            color: #344767;
        }

        #doctoratTable tbody td {
            font-size: 13px;
            vertical-align: middle;
        }

        /* Description PFE — texte tronqué */
        .truncate-text {
            max-width: 350px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
        }

        /* Bouton Téléchargement */
        .download-btn {
            padding: 4px 10px;
            font-size: 12px;
            border-radius: 8px;
            background: #839a5eb3;
            color: #fff;
            text-decoration: none;
        }

        .download-btn:hover {
            background: #839A5E;
            color: #fff;
        }

        /* Mobile responsive cards */
        @media (max-width: 992px) {
            #doctoratTable td:nth-child(10) {
                /* Description */
                white-space: normal !important;
                max-width: 100% !important;
            }
        }
    </style>

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total incubations
                                                inscription</p>
                                            <h5 class="font-weight-bolder mb-0">{{ $countIncubs }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total doctorant
                                                inscription</p>
                                            <h5 class="font-weight-bolder mb-0">{{ $countDocotrat }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Les projets inscris pour Incubation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0" id="projectTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom & Prénom</th>
                                            <th>CIN</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Âge</th>
                                            <th>Formation</th>
                                            <th>Parcours</th>
                                            <th>Exp. Préalable</th>
                                            <th>Dossier</th>
                                            <th>Voir les details</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Les candidatures inscris pour Doctorat</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0" id="doctoratTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom & Prénom</th>
                                            <th>CIN</th>
                                            <th>Téléphone</th>
                                            <th>Genre</th>
                                            <th>Adresse</th>
                                            <th>Email</th>
                                            <th>Filière</th>
                                            <th>Diplôme</th>
                                            <th>Description de PFE</th>
                                            <th>Nationalité</th>
                                            <th>Ville de Résidance</th>
                                            <th>Téléchargé dossier d'inscription</th>
                                        </tr>
                                    </thead>
                                </table>
                                <!-- Description Modal -->
                                <div class="modal fade" id="descriptionModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Description complète</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body" style="max-height:60vh; overflow-y:auto;">
                                                <p id="modalContent" class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            $('#doctoratTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: false,

                ajax: {
                    url: "{{ route('candidate.doctorat') }}",
                },

                language: {
                    emptyTable: "Aucun résultat trouvé.",
                    lengthMenu: "Afficher _MENU_ entrées",
                    info: "Affichage _START_ à _END_ sur _TOTAL_ entrées",
                    search: "Rechercher:",
                    zeroRecords: "Aucun enregistrement trouvé",
                    paginate: {
                        first: "<<",
                        last: ">>",
                        next: ">",
                        previous: "<"
                    },
                },

                columnDefs: [{
                        targets: 0,
                        width: "5%"
                    },
                    {
                        targets: 1,
                        width: "15%"
                    },
                    {
                        targets: 2,
                        width: "8%"
                    },
                    {
                        targets: 3,
                        width: "10%"
                    },
                    {
                        targets: 7,
                        width: "10%"
                    },
                    {
                        targets: 9,
                        width: "20%"
                    }, // Description
                    {
                        targets: 12,
                        width: "10%",
                        orderable: false,
                        searchable: false
                    }
                ],

                columns: [{
                        data: null,
                        name: 'id',
                        render: (data, type, row, meta) => meta.row + 1
                    },
                    {
                        data: 'nom',
                        render: (data, type, row) => `<strong>${row.nom} ${row.prenom}</strong>`
                    },
                    {
                        data: 'cin',
                        data: 'cin'
                    },
                    {
                        data: 'tele',
                        data: 'tele'
                    },
                    {
                        data: 'Sexe',
                        data: 'Sexe'
                    },
                    {
                        data: 'adresse',
                        data: 'adresse'
                    },
                    {
                        data: 'email',
                        data: 'email'
                    },
                    {
                        data: 'FiliereDDO',
                        data: 'FiliereDDO'
                    },
                    {
                        data: 'DDO',
                        data: 'DDO'
                    },
                    {
                        data: 'DescriptionPP',
                        name: 'DescriptionPP',
                        render: (data) => {
                            const limited = data.substring(0, 50) + (data.length > 50 ? '...' : '');
                            const escaped = data.replace(/'/g, "\\'").replace(/"/g, '&quot;');
                            return `
                                <span class="truncate-text"
                                    data-fulltext="${data.replace(/"/g, '&quot;')}"
                                    data-bs-toggle="modal"
                                    data-bs-target="#descriptionModal">
                                    ${limited}
                                </span>`;
                        }
                    },

                    {
                        data: 'nat',
                        name: 'nat'
                    },
                    {
                        data: 'ville',
                        name: 'ville'
                    },

                    // 🟩 Bouton téléchargement
                    {
                        data: 'completedFile',
                        render: (data, type, row) => `
                    <a class="download-btn" 
                       href="/download-zipped-folder/${row.nom}/${row.prenom}/${row.cin}">
                        Télécharger
                    </a>`
                    }
                ]
            });
            document.addEventListener('click', e => {
                if (e.target.matches('.truncate-text')) {
                    document.getElementById('modalContent').innerText = e.target.dataset.fulltext;
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(e) {

            $('#projectTable').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: false,

                ajax: {
                    url: "{{ route('candidate.project') }}",
                },

                language: {
                    emptyTable: "Aucun résultat trouvé.",
                    lengthMenu: "Afficher _MENU_ entrées",
                    info: "Affichage _START_ à _END_ sur _TOTAL_ entrées",
                    search: "Rechercher:",
                    zeroRecords: "Aucun enregistrement trouvé",
                    paginate: {
                        first: "<<",
                        last: ">>",
                        next: ">",
                        previous: "<"
                    },
                },

                columnDefs: [{
                        targets: [0],
                        width: "5%"
                    },
                    {
                        targets: [1],
                        width: "15%"
                    },
                    {
                        targets: [2],
                        width: "8%"
                    },
                    {
                        targets: [3],
                        width: "10%"
                    },
                    {
                        targets: [4],
                        width: "15%"
                    },
                    {
                        targets: [5],
                        width: "5%"
                    },
                    {
                        targets: [9],
                        orderable: false,
                        searchable: false,
                        width: "10%"
                    },
                ],

                columns: [{
                        data: null,
                        name: 'id',
                        render: (data, type, row, meta) => meta.row + 1
                    },
                    {
                        data: 'nom',
                        name: 'nom',
                        render: (data, type, row) => `<strong>${row.nom} ${row.prenom}</strong>`
                    },
                    {
                        data: 'cin',
                        name: 'cin'
                    },
                    {
                        data: 'telephone',
                        name: 'telephone'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'age',
                        name: 'age'
                    },
                    {
                        data: 'formation',
                        name: 'formation'
                    },
                    {
                        data: 'parcourpro',
                        name: 'parcourpro'
                    },
                    {
                        data: 'ecp',
                        name: 'ecp'
                    },

                    {
                        data: 'completedFile',
                        render: (data, type, row) =>
                            `<a class="download-btn" href="/download-zipped-folder/${row.nom}/${row.prenom}">Télécharger</a>`
                    },
                    {
                        data: 'id',
                        render: (data, type, row) =>
                            `<a class="action-btn" href="/candidate/detail/${row.id}">Voir Détails</a>`
                    },
                ]
            });

        });
    </script>
@endsection
