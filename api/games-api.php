<?php

// Array com dados dos jogos
$games = array(
    "bamboo_strike" => array(
        "title" => "Bamboo Strike",
        "description" => "Bamboo Strike é um jogo emocionante de ação onde você controla um samurai habilidoso que deve desviar de bambus e inimigos.",
        "main_image" => "assets/imagens/Bamboo_Strike/samurai.jpg",
        "video" => "https://www.youtube.com/watch?v=_1pA8PIOY9o",
        "carousel_images" => array(
            "assets/imagens/Bamboo_Strike/f1.png",
            "assets/imagens/Bamboo_Strike/f2.png",
            "assets/imagens/Bamboo_Strike/f3.png"
        ),
        "developer" => "Luis Mackiewicz",
        "developer_description" => "Luis Mackiewicz é um desenvolvedor apaixonado por jogos indie, conhecido por criar experiências únicas e desafiadoras.",
        "developer_personality" => "Criativo, inovador e determinado a oferecer o melhor para os jogadores.",
    ),
    "bomb_sword" => array(
        "title" => "Bomb Sword",
        "description" => "Em Bomb Sword, você controla um guerreiro que usa uma espada mágica para detonar bombas e proteger seu reino.",
        "main_image" => "assets/imagens/BombSword/Luis_i2.jpg",
        "video" => "https://www.youtube.com/watch?v=g3uQZ_mpntk",
        "carousel_images" => array(
            "assets/imagens/BombSword/f1.png",
            "assets/imagens/BombSword/f2.png",
            "assets/imagens/BombSword/f3.png"
        ),
        "developer" => "Pedro Rorato",
        "developer_description" => "Pedro Rorato é um desenvolvedor experiente, especializado em jogos de ação e estratégia.",
        "developer_personality" => "Detalhista, focado na experiência do usuário e apaixonado por desafios técnicos.",
    ),
    "bubble_kid" => array(
        "title" => "Bubble Kid",
        "description" => "Bubble Kid é um jogo divertido onde você ajuda um jovem aventureiro a explorar bolhas coloridas em busca de tesouros escondidos.",
        "main_image" => "assets/imagens/Bubble_Kid/bolha.jpg",
        "video" => "https://www.youtube.com/watch?v=Le2L1U3_w74",
        "carousel_images" => array(
            "assets/imagens/Bubble_Kid/f1.png",
            "assets/imagens/Bubble_Kid/f2.png",
            "assets/imagens/Bubble_Kid/f3.png"
        ),
        "developer" => "Gabriel de Barros",
        "developer_description" => "Gabriel de Barros é um desenvolvedor entusiasta por criar jogos que combinam desafios emocionantes com gráficos vibrantes.",
        "developer_personality" => "Entusiasta, criativo e comprometido com a qualidade.",
    ),
    "desordeon" => array(
        "title" => "Desordeon",
        "description" => "Desordeon é um jogo de estratégia onde você guia um macaco curioso por labirintos mágicos, resolvendo enigmas e coletando frutas.",
        "main_image" => "assets/imagens/Desordeon/monkey.jpg",
        "video" => "https://www.youtube.com/watch?v=GMETU0BZc7k",
        "carousel_images" => array(
            "assets/imagens/Desordeon/i1.jpg",
            "assets/imagens/Desordeon/f2.png",
            "assets/imagens/Desordeon/f3.webp"
        ),
        "developer" => "Raul Miguel",
        "developer_description" => "Raul Miguel é um desenvolvedor apaixonado por criar jogos que desafiam a mente dos jogadores com enigmas intrigantes e design criativo.",
        "developer_personality" => "Analítico, perspicaz e comprometido com a inovação.",
    ),
    "explosion_race" => array(
        "title" => "Explosion Race",
        "description" => "Explosion Race é um jogo de corrida emocionante onde você pilota carros velozes em pistas perigosas cheias de explosões.",
        "main_image" => "assets/imagens/ExplosionRace/exRace.jpg",
        "video" => "https://www.youtube.com/watch?v=PoiQGKC9miE",
        "carousel_images" => array(
            "assets/imagens/ExplosionRace/f1.png",
            "assets/imagens/ExplosionRace/f2.png",
            "assets/imagens/ExplosionRace/f3.png"
        ),
        "developer" => "Kassio",
        "developer_description" => "Kassio é um desenvolvedor apaixonado por jogos de corrida que se destacam pela velocidade, adrenalina e desafios únicos.",
        "developer_personality" => "Energético, competitivo e focado na experiência do jogador.",
    ),
    "speed_bird" => array(
        "title" => "Speed Bird",
        "description" => "Speed Bird é um jogo frenético onde você controla um pássaro veloz em busca de desafios aéreos e tesouros escondidos.",
        "main_image" => "assets/imagens/Speed_Bird/bird.jpg",
        "video" => "https://www.youtube.com/watch?v=9b3GZxxVp5Y",
        "carousel_images" => array(
            "assets/imagens/Speed_Bird/f1.png",
            "assets/imagens/Speed_Bird/f2.png",
            "assets/imagens/Speed_Bird/f3.png"
        ),
        "developer" => "Samuel Ernandes",
        "developer_description" => "Samuel Ernandes é um desenvolvedor apaixonado por jogos que exploram a liberdade do voo e desafios aéreos emocionantes.",
        "developer_personality" => "Aventureiro, criativo e comprometido com a excelência.",
    ),
);

// Função para verificar se um jogo existe na API
function gameExists($game_slug) {
    global $games;
    return array_key_exists($game_slug, $games);
}

// Função para obter os dados de um jogo pelo slug
function getGameData($game_slug) {
    global $games;
    if (gameExists($game_slug)) {
        return $games[$game_slug];
    } else {
        return null;
    }
}

?>
