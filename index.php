<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./Imagens/ArcadeHub.png">
</head>
<body>
    <header class="header">
        <a href="home" title="Home" class="header-logo">
            <img src="./Imagens/LogoMarca.png" alt="ArcadeHub">
        </a>

        <a href="" title="Mostrar Menu" class="header-menu">
        <img src="./Imagens/Menu.png">
        </a>

    </header>
    <main>

        <?php
if (
    isset($_GET["param"])
    ) {
        $param = $_GET["param"];
    }
    
    $p= explode("/", $param);
    
    
    echo$page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;
    
    if ($page == "jogo") {
        echo $pagina = "jogo/{$jogo}.php";
    }
    
    else {
        echo $pagina = "paginas/{$page}.php";
    }
    
    
    
    if (file_exists($pagina)) {
        include $pagina;
        
    }
    
    else {
        include "./erro.php";
    } 
    ?>
    </main>
    <footer>
        <p>Desenvolvido Por Luis Miguel Mackiewicz</p>
    </footer>
    </body>
    </html>