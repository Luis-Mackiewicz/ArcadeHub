<?php
// URL da API de jogos
$api_url = "http://localhost/ArcadeHub/api/jogos_api.php";

// Faz a requisição à API
$response = file_get_contents($api_url);

// Decodifica a resposta JSON
$games = json_decode($response, true);

// Inclui o cabeçalho (header.php)
include_once "../fixos/header.php";
?>

<!-- Conteúdo da página home -->
<div class="container mt-4">
    <!-- Conteúdo da página home -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($games as $index => $game) : ?>
                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                    <a href="../paginas/<?php echo $game['slug']; ?>.php">
                        <img src="<?php echo $game['main_image']; ?>" class="d-block w-100" alt="<?php echo $game['title']; ?>">
                    </a>
                </div>
                <?php if (!empty($game['carousel_images']) && is_array($game['carousel_images'])) : ?>
                    <?php foreach ($game['carousel_images'] as $carousel_index => $carousel_image) : ?>
                        <div class="carousel-item">
                            <a href="../paginas/<?php echo $game['slug']; ?>.php">
                                <img src="<?php echo $carousel_image; ?>" class="d-block w-100" alt="<?php echo $game['title']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
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

    <h1 class="text-center mt-4">Jogue Agora</h1>

    <div class="row mt-4">
        <?php foreach ($games as $game) : ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="../paginas/<?php echo $game['slug']; ?>.php">
                        <img class="card-img-top" src="<?php echo $game['main_image']; ?>" alt="<?php echo $game['title']; ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $game['title']; ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="../paginas/<?php echo $game['slug']; ?>.php" class="btn btn-sm btn-outline-secondary">Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Inclui o rodapé (footer.php)
include_once "../fixos/footer.php";
?>

<!-- Carregamento do Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
