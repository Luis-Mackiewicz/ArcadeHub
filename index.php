<?php
include_once 'inc/header.php';
?>

<main>
    <section>
        <h1>Bem-vindo ao ArcadeHub!</h1>
        <p>Explore nossos jogos clássicos e divirta-se!</p>
        <a href="games/">Jogar Agora</a>
    </section>

    <section>
        <h2>Jogos em Destaque</h2>
        <div class="game-grid">
            <?php
            // Buscar os jogos em destaque da API
            $featured_games = get_featured_games();
            foreach ($featured_games as $game) {
                display_game_card($game);
            }
            ?>
        </div>
    </section>
</main>

<?php
include_once 'inc/footer.php';
?>