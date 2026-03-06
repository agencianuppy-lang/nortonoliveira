<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Norton Oliveira';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Reengenharia, retrofit e fabricacao industrial para fertilizantes.';
$activePage = isset($activePage) ? $activePage : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/mousecursor.css">
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <style>
        .brand-logo { width: 9rem; }
        .main-menu .nav-link.active { color: #c7f268 !important; }
    </style>
</head>
<body>
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/norton-logo.png" alt="Norton Oliveira"></div>
        </div>
    </div>

    <header class="main-header">
        <div class="header-sticky bg-section">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php" aria-label="Ir para a pÃ¡gina inicial">
                        <img src="images/norton-logo.png" class="brand-logo" alt="Norton Oliveira">
                    </a>

                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="index.php">InÃ­cio</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="sobre.php">Quem somos</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="servicos.php">ServiÃ§os</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="equipamentos.php">Equipamentos</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="fotos-videos.php">Fotos e VÃ­deos</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo $activePage = isset($activePage) ? $activePage : ''; ?>" href="contato.php">Contato</a></li>
                            </ul>
                        </div>

                        <div class="header-btn">
                            <a href="https://wa.me/55SEUNUMEROAQUI?text=Ola!%20Quero%20um%20diagnostico%20tecnico%20para%20minha%20planta."
                               class="btn-default btn-highlighted" target="_blank" rel="noopener">
                                Falar com especialista
                            </a>
                        </div>
                    </div>

                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>


