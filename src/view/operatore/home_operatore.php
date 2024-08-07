<?php
include_once ("/xampp/htdocs/ClinicPrive/src/includes/connection.php");
include_once("/xampp/htdocs/ClinicPrive/src/includes/database.php");
include_once("/xampp/htdocs/ClinicPrive/src/includes/functions.php");
$badgeN = $_GET['badgeN']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="../css/login.css">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#visualizza_appuntamenti">Visualizza Appuntamenti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pazienti">Visualizza Pazienti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#assegnamento-terapie">Visualizza Turni</a>
                    </li>
                    <?php
                if(isCaposala($badgeN, $con)){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="gestisci_turni.php?<?php print_r("nBadge=$badgeN")?>">Gestisci Turni</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MENU' PRINCIPALE -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" id="visualizzazione_appuntamenti">Visualizza Appuntamenti</h2>
                            <p class="card-text">Visualizza gli appuntamenti dei pazienti..</p>
                            <a href="visualizza_appuntamenti.php?<?php print_r("nBadge=$badgeN")?>" class="btn btn-primary">Vai alla gestione</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" id="visualizzazione-pazienti">Visualizza Pazienti</h2>
                            <p class="card-text">Visualizza i dati dei pazienti.</p>
                            <a href="visualizza_pazienti.php?<?php print_r("nBadge=$badgeN")?>" class="btn btn-primary">Vai alla gestione</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" id="visualizza turni">Visualizza Turni</h2>
                            <p class="card-text">Visualizza i turni assegnati a te.</p>
                            <a href="visualizza_turni.php?<?php print_r("nBadge=$badgeN")?>" class="btn btn-primary">Vai alla gestione</a>
                        </div>
                    </div>
                </div>
                <?php
                if(isCaposala($badgeN, $con)){
                ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Gestione Turni</h2>
                            <p class="card-text">Gestisci i turni degli operatori.</p>
                            <a href="gestisci_turni.php?<?php print_r("nBadge=$badgeN")?>" class="btn btn-primary">Vai alla gestione</a>
                        </div>
                    </div>
                </div>
                <?php }?>       
            </div>
        </div>
    </section>
</body>
</html>