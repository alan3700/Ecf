<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" href="css/help.css">
    <link rel="stylesheet" href="css/reset.css">
    <title><?php if ( isset($page) ) { echo $page . ' - '; } ?>ECF</title>
</head>
<body>
    <header>
        <div class="container flex-header">
            <div class="titre-header">
                <h2>
                    DWWM
                </h2>
            </div>
            <div class="nav-container">
                <nav class="main-nav">
                    <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu </button>
                    <ul id="menu" class="menu" role="list" hidden>
                        <li class="menu-item ">
                            <a href="index.php" class="menu-link  <?php if ( isset($page) && $page === 'Home'){echo 'active';} ?>">Accueil</a>
                        </li>
                        <li class="menu-item" >
                            <a href="formation.php" class="menu-link <?php if ( isset($page) && $page === 'Formation'){echo 'active';} ?>"><NOBR>La formation</NOBR></a>
                        </li>
                        <li class="menu-item" >
                            <a href="etudiant.php" class="menu-link <?php if ( isset($page) && $page === 'Etudiants'){echo 'active';} ?>"><NOBR>Les étudiants</NOBR></a>
                        </li>
                        <li class="menu-item" >
                            <a href="actualite.php" class="menu-link <?php if ( isset($page) && $page === 'Actualité'){echo 'active';} ?>">Actualités</a>
                        </li>
                        <li class="menu-item" >
                            <a href="contact.php" class="menu-link <?php if ( isset($page) && $page === 'Contact'){echo 'active';} ?>"><NOBR>Nous Contactez</NOBR></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>