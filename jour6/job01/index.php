<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPlateforme_ Interactive</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-color: #dcdcdc;
            font-family: "Segoe UI", sans-serif;
        }

        .main-title {
            font-weight: 300;
            color: #333;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .custom-jumbotron {
            background-color: #e9ecef;
            padding: 3rem 2rem;
            border-radius: 0.3rem;
            height: 100%;
        }

        .custom-jumbotron h1 {
            font-weight: 300;
        }

        /* Style Barre de progression */
        .progress-bar-custom {
            background-color: #ffc107;
        }

        /* Style liste active */
        .list-group-item.active {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .form-section {
            margin-top: 20px;
        }

        /* Curseur pour la pagination */
        .page-link,
        .list-group-item {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#" style="color: #555;">LPTF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="https://laplateforme.io" target="_blank">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Units</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="display-3 main-title">LaPlateforme_</h1>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-3 mb-3">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1475518845976-0d17fce83a2e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Un Papillon" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Un Papillon</h5>
                        <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. <br> Ne pas ingérer.</p>
                        <button id="btn-papillon" class="btn btn-primary w-100 mt-auto">Commander votre propre papillon</button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-7 mb-3">
                <div class="custom-jumbotron">
                    <h1 class="display-4" id="jumbo-title">Bonjour, monde!</h1>
                    <div id="jumbo-content">
                        <p class="lead">Il existe plusieurs visions du terme :</p>
                        <p>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
                        <p>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                        <hr class="my-4">
                        <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                    </div>

                    <div class="mt-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <button id="btn-reboot" class="btn btn-danger btn-lg" type="button">
                            Rebooter le Monde <i class="fas fa-spinner" id="jumbo-spinner"></i>
                        </button>

                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link page-select" data-page="1">1</a></li>
                                <li class="page-item"><a class="page-link page-select" data-page="2">2</a></li>
                                <li class="page-item"><a class="page-link page-select" data-page="3">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-2 mb-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active">Limbes</a>
                    <a class="list-group-item list-group-item-action">Luxure</a>
                    <a class="list-group-item list-group-item-action">Gourmandise</a>
                    <a class="list-group-item list-group-item-action">Avarice</a>
                    <a class="list-group-item list-group-item-action">Colere</a>
                    <a class="list-group-item list-group-item-action">Heresie</a>
                    <a class="list-group-item list-group-item-action">Violence</a>
                    <a class="list-group-item list-group-item-action">Ruse et Tromperie</a>
                    <a class="list-group-item list-group-item-action">Trahison</a>
                    <a class="list-group-item list-group-item-action">Internet Explorer</a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-end">
                <label class="fw-bold mb-2">Installation de AI 9000</label>
            </div>
            <div class="col-12 d-flex align-items-center">
                <button class="btn btn-sm btn-secondary me-2" id="pg-minus"><i class="fas fa-minus"></i></button>
                <div class="progress flex-grow-1" style="height: 25px;">
                    <div id="my-progress" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%; color: black; font-weight: bold;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button class="btn btn-sm btn-secondary ms-2" id="pg-plus"><i class="fas fa-plus"></i></button>
            </div>
        </div>

        <div class="row form-section pb-5">
            <div class="col-md-6 mb-4">
                <h5 class="mb-3 fw-bold">Recevez votre copie gratuite d'internet 2!</h5>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="input-login" placeholder="Login">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="input-pwd-fake" placeholder="Mot de Passe">
                    <span class="input-group-text">@example.com</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">DogeCoin</span>
                    <input type="text" class="form-control" id="input-doge">
                    <span class="input-group-text">.00</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">url</span>
                    <input type="text" class="form-control" id="input-url" value="https://l33t.lptf/dkwb/berlusconimkt/">
                </div>
            </div>

            <div class="col-md-5 offset-md-1">
                <form id="login-form">
                    <div class="mb-3">
                        <label for="emailAddr" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailAddr" required>
                    </div>
                    <div class="mb-3">
                        <label for="passInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passInput" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkMe">
                        <label class="form-check-label" for="checkMe">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="papillonModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Votre papillon a bien été commandé. Attention aux effets secondaires !
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dgcModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title">Mode Secret Activé (DGC)</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="dgcContent">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {

            // --- 1. BOUTON PAPILLON ---
            $('#btn-papillon').click(function() {
                var myModal = new bootstrap.Modal(document.getElementById('papillonModal'));
                myModal.show();
            });

            // --- 2. REBOOTER LE MONDE (Blade Runner Quotes) ---
            const quotes = [
                "I've seen things you people wouldn't believe.",
                "Attack ships on fire off the shoulder of Orion.",
                "I watched C-beams glitter in the dark near the Tannhäuser Gate.",
                "All those moments will be lost in time, like tears in rain.",
                "Wake up, time to die.",
                "Quite an experience to live in fear, isn't it?"
            ];

            $('#btn-reboot').click(function() {
                // Choix aléatoire
                const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
                $('#jumbo-title').text("Blade Runner Protocol");
                $('#jumbo-content').html(`<p class="lead text-danger">"${randomQuote}"</p>`);
            });

            // --- 3. PAGINATION JUMBOTRON ---
            $('.page-select').click(function(e) {
                e.preventDefault();
                let page = $(this).data('page');
                $('#jumbo-title').text("Page " + page);

                let content = "";
                if (page === 1) content = "Contenu original de la page 1 restauré.";
                if (page === 2) content = "Bienvenue dans la matrice (Page 2). Le lapin blanc est en retard.";
                if (page === 3) content = "Erreur 404... Non je plaisante, voici le contenu de la page 3.";

                $('#jumbo-content').html(`<p>${content}</p>`);
            });

            // --- 4. LISTE GROUPEE (Active class) ---
            $('.list-group-item').click(function(e) {
                e.preventDefault();
                // Enlève active de tous les frères, ajoute à celui cliqué
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            });

            // --- 5. PROGRESS BAR (+ et -) ---
            function updateProgress(val) {
                let bar = $('#my-progress');
                // Bornes 0 et 100
                if (val > 100) val = 100;
                if (val < 0) val = 0;

                bar.css('width', val + '%');
                bar.attr('aria-valuenow', val);
            }

            $('#pg-plus').click(function() {
                let currentVal = parseInt($('#my-progress').attr('aria-valuenow'));
                updateProgress(currentVal + 5);
            });

            $('#pg-minus').click(function() {
                let currentVal = parseInt($('#my-progress').attr('aria-valuenow'));
                updateProgress(currentVal - 5);
            });

            // --- 6. KEY LISTENER (D, G, C) ---
            let keySequence = [];
            $(document).keyup(function(e) {
                // On garde que la lettre en minuscule
                keySequence.push(e.key.toLowerCase());

                // On garde seulement les 3 dernières touches
                if (keySequence.length > 3) {
                    keySequence.shift();
                }

                // Vérification
                if (keySequence.join('') === 'dgc') {
                    // Récupération des valeurs du formulaire de gauche
                    let login = $('#input-login').val() || "Vide";
                    let pass = $('#input-pwd-fake').val() || "Vide";
                    let doge = $('#input-doge').val() || "0";
                    let url = $('#input-url').val();

                    let htmlContent = `
                        <ul>
                            <li><strong>Login:</strong> ${login}</li>
                            <li><strong>Pass:</strong> ${pass}</li>
                            <li><strong>DogeCoin:</strong> ${doge}</li>
                            <li><strong>URL:</strong> ${url}</li>
                        </ul>
                    `;
                    $('#dgcContent').html(htmlContent);

                    var dgcModal = new bootstrap.Modal(document.getElementById('dgcModal'));
                    dgcModal.show();

                    // Reset séquence pour ne pas spammer
                    keySequence = [];
                }
            });

            // --- 7. VALIDATION FORMULAIRE (Couleur Spinner) ---
            $('#login-form').submit(function(e) {
                e.preventDefault(); // Empêche le rechargement

                let email = $('#emailAddr').val();
                let pwd = $('#passInput').val();

                if (email !== "" && pwd !== "") {
                    const colors = ["text-primary", "text-success", "text-danger", "text-warning", "text-info", "text-dark"];
                    const randomColor = colors[Math.floor(Math.random() * colors.length)];

                    // On reset les couleurs et on met la nouvelle
                    $('#jumbo-spinner').removeClass().addClass("fas fa-spinner " + randomColor);
                } else {
                    alert("Veuillez remplir les champs !");
                }
            });

        });
    </script>
</body>

</html>