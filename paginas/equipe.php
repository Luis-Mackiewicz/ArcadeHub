<?php
// Inclui o cabeçalho (header.php)
include_once "../fixos/header.php";

// URL da API de membros da equipe
$api_url = "http://localhost/ArcadeHub/api/equipe_api.php";

// Faz a requisição à API
$response = file_get_contents($api_url);

// Decodifica a resposta JSON
$teamMembers = json_decode($response, true);

?>

<!-- Conteúdo da página Equipe -->
<div class="container mt-4">
    <h1 class="text-center mb-4">Equipe</h1>

    <!-- Verifica se existem membros da equipe para exibir -->
    <?php if (!empty($teamMembers) && is_array($teamMembers)) : ?>
        <div class="row">
            <?php foreach ($teamMembers as $member) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="<?php echo $member['image']; ?>" class="card-img-top" alt="<?php echo $member['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $member['name']; ?></h5>
                            <p class="card-text"><?php echo $member['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p class="text-center">Nenhum membro da equipe encontrado.</p>
    <?php endif; ?>
</div>

<?php
// Inclui o rodapé (footer.php)
include_once "../fixos/footer.php";
?>

