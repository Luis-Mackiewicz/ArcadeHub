<?php
// Inclui o cabeçalho (header.php)
include_once "../fixos/header.php";
?>

<!-- Conteúdo da Página -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Imagem Principal do Jogo -->
            <img src="assets/imagens/Bamboo_Strike/banner.png" class="img-fluid" alt="Banner do Bamboo Strike">
        </div>
        <div class="col-md-6">
            <!-- Vídeo do Jogo -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_1pA8PIOY9o" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Carrossel de Imagens -->
    <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Descrição do Jogo -->
    <div class="mt-4">
        <h2 class="mb-3">Bamboo Strike</h2>
        <p class="lead">Bamboo Strike é um jogo emocionante de ação onde você controla um samurai habilidoso que deve desviar de bambus e inimigos.</p>
    </div>

    <!-- Desenvolvedor -->
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Desenvolvedor: Luis Mackiewicz</h3>
            <p>Luis Mackiewicz é um desenvolvedor apaixonado por jogos indie, conhecido por criar experiências únicas e desafiadoras.</p>
            <p><strong>Personalidade:</strong> Criativo, inovador e determinado a oferecer o melhor para os jogadores.</p>
        </div>
        <div class="col-md-6">
            <!-- Imagem do Desenvolvedor -->
            <img src="assets/imagens/Bamboo_Strike/developer.jpg" class="img-fluid" alt="Luis Mackiewicz">
        </div>
    </div>

</div>

<?php
// Inclui o rodapé (footer.php)
include_once "../fixos/footer.php";
?>
