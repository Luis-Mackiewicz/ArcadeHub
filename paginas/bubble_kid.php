<?php
// Inclui o cabeçalho (header.php)
include_once "../fixos/header.php";
?>

<!-- Conteúdo da Página -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Imagem Principal do Jogo -->
            <img src="../assets/imagens/bubble_kid_images/banner.jpg" class="img-fluid rounded" alt="Banner do Bubble Kid">
        </div>
        <div class="col-md-6">
            <!-- Vídeo do Jogo (Exemplo de Placeholder) -->
            <div class="embed-responsive embed-responsive-16by9 mt-4 mt-md-0">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_video_id_" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Carrossel de Imagens -->
    <div id="gameCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/imagens/bubble_kid_images/f1.png" class="d-block w-100 rounded" alt="Primeira Imagem">
            </div>
            <div class="carousel-item">
                <img src="../assets/imagens/bubble_kid_images/f2.png" class="d-block w-100 rounded" alt="Segunda Imagem">
            </div>
            <div class="carousel-item">
                <img src="../assets/imagens/bubble_kid_images/f3.png" class="d-block w-100 rounded" alt="Terceira Imagem">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Descrição do Jogo -->
    <div class="mt-4">
        <h2 class="mb-3">Bubble Kid</h2>
        <p class="lead">Embarque em uma aventura com Bubble Kid, uma bolha estilosa e confiante que deve coletar moedas e enfrentar obstáculos perigosos. Navegue por cenários coloridos, desafie a gravidade e explore um mundo cheio de surpresas e desafios únicos. Prepare-se para uma jornada emocionante e cheia de bolhas!</p>
    </div>

    <!-- Botão Jogar -->
    <div class="mt-4">
        <a href="#" class="btn btn-primary">Jogar Agora</a>
    </div>

</div>

<?php
// Inclui o rodapé (footer.php)
include_once "../fixos/footer.php";
?>

<!-- Carregamento do Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
