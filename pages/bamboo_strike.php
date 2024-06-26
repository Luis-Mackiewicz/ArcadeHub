<?php
include_once '../inc/header.php';

// Buscar os detalhes do jogo BombSword da API
$game_details = get_game_details('BombSword');
?>

<main>
    <section>
        <h1><?php echo $game_details['title']; ?></h1>
        <div class="game-details">
            <img src="<?php echo $game_details['cover_image']; ?>" alt="<?php echo $game_details['title']; ?>">
            <div class="description">
                <p><?php echo $game_details['description']; ?></p>
                <p>Classificação: <?php echo $game_details['rating']; ?></p>
                <a href="<?php echo $game_details['play_link']; ?>" class="play-button">Jogar</a>
            </div>
        </div>
    </section>
</main>

<?php
include_once '../inc/footer.php';
?>