<?php
// Função para buscar informações dos jogos
function get_games() {
    // Código para buscar e retornar os dados dos jogos da API
    $games = [
        [
            'id' => 'BombSword',
            'title' => 'BombSword',
            'description' => 'Lute contra seus inimigos com sua espada e bombas!',
            'cover_image' => 'assets/img/bombsword.jpg',
            'rating' => '4.5',
            'play_link' => 'games/BombSword.php'
        ],
        [
            'id' => 'Bamboo_Strike',
            'title' => 'Bamboo Strike',
            'description' => 'Derrote seus oponentes com ataques de bambu!',
            'cover_image' => 'assets/img/bamboo_strike.jpg',
            'rating' => '4.2',
            'play_link' => 'games/Bamboo_Strike.php'
        ]
    ];
    return $games;
}

// Função para buscar informações de um jogo específico
function get_game_details($game_id) {
    // Código para buscar e retornar os detalhes do jogo da API
    $games = get_games();
    foreach ($games as $game) {
        if ($game['id'] == $game_id) {
            return $game;
        }
    }
    return null;
}

// Função para buscar os jogos em destaque
function get_featured_games() {
    // Código para buscar e retornar os jogos em destaque da API
    $games = get_games();
    $featured_games = array_slice($games, 0, 3);
    return $featured_games;
}

// Função para buscar os membros da equipe
function get_team_members() {
    // Código para buscar e retornar os membros da equipe da API
    $team_members = [
        [
            'name' => 'John Doe',
            'role' => 'Desenvolvedor',
            'image' => 'assets/img/john_doe.jpg'
        ],
        [
            'name' => 'Jane Smith',
            'role' => 'Designer',
            'image' => 'assets/img/jane_smith.jpg'
        ],
        [
            'name' => 'Mike Johnson',
            'role' => 'Gerente de Projeto',
            'image' => 'assets/img/mike_johnson.jpg'
        ]
    ];
    return $team_members;
}