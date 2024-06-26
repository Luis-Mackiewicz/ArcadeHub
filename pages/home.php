<?php
include '../includes/header.php';

// URL da API
$api_url = 'http://localhost/arcadehub/api/games-api.php';

// Faz a requisição à API
$response = file_get_contents($api_url);

// Verifica se houve erro na requisição
if ($response === false) {
    die('Erro ao acessar a API.');
}

// Decodifica os dados JSON para array
$games = json_decode($response, true);

// Verifica se os dados foram decodificados corretamente
if ($games === null) {
    die('Erro ao processar os dados da API.');
}
?>

<!-- Início do conteúdo da página -->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($games as $index => $game): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $game['imagem']; ?>" class="d-block w-100" alt="<?php echo $game['nome']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <div class="row mt-4">
        <?php foreach ($games as $game): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo $game['imagem']; ?>" class="card-img-top" alt="<?php echo $game['nome']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $game['nome']; ?></h5>
                        <p class="card-text"><?php echo $game['descricao']; ?></p>
                        <a href="<?php echo 'pages/' . str_replace(' ', '_', strtolower($game['nome'])) . '.php'; ?>" class="btn btn-primary">Ver Jogo</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Incluindo o footer
include '../includes/footer.php';
?>
