<?php include_once '../includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="text-center">Bubble Kid</h1>

    <div class="row">
        <div class="col-md-6">
            <!-- Imagem -->
            <img src="../assets/img/bubble_kid.jpg" class="img-fluid" alt="Bubble Kid">
        </div>
        <div class="col-md-6">
            <!-- Vídeo -->
            <h2>Vídeo do Jogo</h2>
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <video class="embed-responsive-item" controls>
                    <source src="../assets/videos/bubble_kid.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento <code>video</code>.
                </video>
            </div>

            <!-- Carrossel de Imagens -->
            <h2>Imagens do Jogo</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/bubble_kid_slide1.jpg" alt="Primeiro slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/bubble_kid_slide2.jpg" alt="Segundo slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/bubble_kid_slide3.jpg" alt="Terceiro slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Botão Jogar -->
    <div class="text-center mt-4">
        <a href="#jogar" class="btn btn-primary">Jogar</a>
    </div>

    <!-- Descrição -->
    <div class="mt-4">
        <h2>Descrição</h2>
        <p>Descubra os misterios e voe nessa aventura.</p>
    </div>

    <!-- Vídeo do Jogo -->
    <div id="jogar" class="embed-responsive embed-responsive-16by9 mt-4">
        <iframe class="embed-responsive-item" src="https://exemplo.com/bubble_kid" allowfullscreen></iframe>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>
