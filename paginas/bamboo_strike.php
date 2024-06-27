<?php
// Inclui o cabeçalho (header.php)
include_once "fixos/header.php";
?>

<!-- Conteúdo da Página -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Imagem Principal do Jogo -->
            <img src="assets/imagens/Bamboo_Strike/banner.png" class="img-fluid" alt="Banner do Bamboo Strike">
        </div>
        <div class="col-md-6">
            <!-- Vídeo do Jogo (corrigido para incorporação correta do YouTube) -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_1pA8PIOY9o" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Carrossel de Imagens -->
    <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/imagens/Bamboo_Strike/f1.png" class="d-block w-100" alt="Primeira Imagem">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/Bamboo_Strike/f2.png" class="d-block w-100" alt="Segunda Imagem">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/Bamboo_Strike/f3.png" class="d-block w-100" alt="Terceira Imagem">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Botão "Jogar" -->
    <div class="mt-4">
        <a href="game/Bamboo/index.html" class="btn btn-primary btn-lg">Jogar</a>
    </div>
</div>

<?php
// Inclui o rodapé (footer.php)
include_once "fixos/footer.php";
?>
