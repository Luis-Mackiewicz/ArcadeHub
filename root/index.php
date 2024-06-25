<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="text-center">Jogue Agora</h1>
    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/imagens/BannerBomb.png" class="d-block w-100" alt="BombSword">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/BambooStrike.png" class="d-block w-100" alt="Bamboo Strike">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/BubbleKid.png" class="d-block w-100" alt="Bubble Kid">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/Desordeon.jpeg" class="d-block w-100" alt="Desordeon">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/ExplosionRace.png" class="d-block w-100" alt="Explosion Race">
            </div>
            <div class="carousel-item">
                <img src="assets/imagens/SpeedBird.png" class="d-block w-100" alt="Speed Bird">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/bombsword.jpg" class="card-img-top" alt="BombSword">
                <div class="card-body">
                    <h5 class="card-title">BombSword</h5>
                    <p class="card-text">Luis Mackiewicz</p>
                    <a href="jogos/bombsword.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/bamboo_strike.jpg" class="card-img-top" alt="Bamboo Strike">
                <div class="card-body">
                    <h5 class="card-title">Bamboo Strike</h5>
                    <p class="card-text">Pedro Rorato</p>
                    <a href="jogos/bamboo_strike.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/bubble_kid.jpg" class="card-img-top" alt="Bubble Kid">
                <div class="card-body">
                    <h5 class="card-title">Bubble Kid</h5>
                    <p class="card-text">Gabriel de Barros</p>
                    <a href="jogos/bubble_kid.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/desordeon.jpg" class="card-img-top" alt="Desordeon">
                <div class="card-body">
                    <h5 class="card-title">Desordeon</h5>
                    <p class="card-text">Raul Miguel</p>
                    <a href="jogos/desordeon.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/explosion_race.jpg" class="card-img-top" alt="Explosion Race">
                <div class="card-body">
                    <h5 class="card-title">Explosion Race</h5>
                    <p class="card-text">Kassio</p>
                    <a href="jogos/explosion_race.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/img/speed_bird.jpg" class="card-img-top" alt="Speed Bird">
                <div class="card-body">
                    <h5 class="card-title">Speed Bird</h5>
                    <p class="card-text">Samuel Ernandes</p>
                    <a href="jogos/speed_bird.php" class="btn btn-primary">Jogar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
