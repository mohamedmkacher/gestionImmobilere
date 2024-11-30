<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion Immobilière</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../controler/appartement/lister.php">Nos Appartements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controler/villa/lister.php">Nos Villas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Bienvenue</h1>
        <a href="../controler/appartement/lister.php" class="btn btn-dark mb-3">Gestion des appartements</a><br>
        <a href="../controler/villa/lister.php" class="btn btn-dark">Gestion des appartements</a>
</body>

</html>