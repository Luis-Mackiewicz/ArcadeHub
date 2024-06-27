<?php include 'fixos/header.php'; ?>

<!-- Conteúdo da página inicial -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Jogue Agora</h1>
            <!-- Carousel com imagens dos jogos -->
            <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($games as $key => $game) : ?>
                        <div class="carousel-item <?php echo ($key === 'bamboo_strike') ? 'active' : ''; ?>">
                            <a href="<?php echo $key . '.php'; ?>">
                                <img src="<?php echo $game['carousel_images'][0]; ?>" class="d-block w-100" alt="<?php echo $game['title']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
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
        </div>
    </div>
    <!-- Cards dos jogos -->
    <div class="row mt-5">
        <?php foreach ($games as $key => $game) : ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?php echo $game['main_image']; ?>" class="card-img-top" alt="<?php echo $game['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $game['title']; ?></h5>
                        <p class="card-text"><?php echo $game['description']; ?></p>
                        <a href="<?php echo $key . '.php'; ?>" class="btn btn-primary">Jogar Agora</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'fixos/footer.php'; ?>
