<?php
$games = array(
    "bamboo_strike" => array(
        "title" => "Bamboo Strike",
        "description" => "Bamboo Strike é um jogo emocionante de ação onde você controla um samurai habilidoso que deve desviar de bambus e inimigos.",
        "main_image" => "../assets/imagens/bamboo_strike_images/samurai.jpg",
        "video" => "https://www.youtube.com/watch?v=_1pA8PIOY9o",
        "carousel_images" => array(
            "../assets/imagens/bamboo_strike_images/f1.png",
            "../assets/imagens/bamboo_strike_images/f2.png",
            "../assets/imagens/bamboo_strike_images/f3.png",
        ),
        "developer" => "Luis Mackiewicz",
        "developer_description" => "Luis Mackiewicz é um desenvolvedor apaixonado por jogos indie, conhecido por criar experiências únicas e desafiadoras.",
        "developer_personality" => "Criativo, inovador e determinado a oferecer o melhor para os jogadores.",
        "developer_image" => "../assets/imagens/equipe/luis_mackiewicz.jpg"
    ),
    "bomb_sword" => array(
        "title" => "Bomb Sword",
        "description" => "Em Bomb Sword, você controla um guerreiro que usa uma espada mágica para detonar bombas e proteger seu reino.",
        "main_image" => "../assets/imagens/bomb_sword_images/Luis_i2.jpg",
        "video" => "https://www.youtube.com/watch?v=g3uQZ_mpntk",
        "carousel_images" => array(
            "../assets/imagens/bomb_sword_images/f1.png",
            "../assets/imagens/bomb_sword_images/f2.png",
            "../assets/imagens/bomb_sword_images/f3.png"
        ),
        "developer" => "Pedro Rorato",
        "developer_description" => "Pedro Rorato é um desenvolvedor experiente, especializado em jogos de ação e estratégia.",
        "developer_personality" => "Detalhista, focado na experiência do usuário e apaixonado por desafios técnicos.",
        "developer_image" => "../assets/imagens/equipe/pedro_rorato.jpg"
    ),
    "bubble_kid" => array(
        "title" => "Bubble Kid",
        "description" => "Bubble Kid é um jogo divertido onde você ajuda um jovem aventureiro a explorar bolhas coloridas em busca de tesouros escondidos.",
        "main_image" => "../assets/imagens/bubble_kid_images/bolha.jpg",
        "video" => "https://www.youtube.com/watch?v=Le2L1U3_w74",
        "carousel_images" => array(
            "../assets/imagens/bubble_kid_images/f1.png",
            "../assets/imagens/bubble_kid_images/f2.png",
            "../assets/imagens/bubble_kid_images/f3.png",
        ),
        "developer" => "Gabriel de Barros",
        "developer_description" => "Gabriel de Barros é um desenvolvedor entusiasta por criar jogos que combinam desafios emocionantes com gráficos vibrantes.",
        "developer_personality" => "Entusiasta, criativo e comprometido com a qualidade.",
        "developer_image" => "../assets/imagens/equipe/gabriel_barros.jpg"
    ),
    "desordeon" => array(
        "title" => "Desordeon",
        "description" => "Desordeon é um jogo de estratégia onde você guia um macaco curioso por labirintos mágicos, resolvendo enigmas e coletando frutas.",
        "main_image" => "../assets/imagens/desordeon.php_images/monkey.jpg",
        "video" => "https://www.youtube.com/watch?v=GMETU0BZc7k",
        "carousel_images" => array(
            "../assets/imagens/desordeon_images/f1.png",
            "../assets/imagens/desordeon_images/f2.png",
            "../assets/imagens/desordeon_images/f3.png"
        ),
        "developer" => "Raul Miguel",
        "developer_description" => "Raul Miguel é um desenvolvedor apaixonado por criar jogos que desafiam a mente dos jogadores com enigmas intrigantes e design criativo.",
        "developer_personality" => "Analítico, perspicaz e comprometido com a inovação.",
        "developer_image" => "../assets/imagens/equipe/raul_miguel.jpg"
    ),
    "explosion_race" => array(
        "title" => "Explosion Race",
        "description" => "Explosion Race é um jogo de corrida emocionante onde você pilota carros velozes em pistas perigosas cheias de explosões.",
        "main_image" => "../assets/imagens/explosion_race_images/exRace.jpg",
        "video" => "https://www.youtube.com/watch?v=PoiQGKC9miE",
        "carousel_images" => array(
            "../assets/imagens/explosion_race_images/f1.png",
            "../assets/imagens/explosion_race_images/f2.png",
            "../assets/imagens/explosion_race_images/f3.png"
        ),
        "developer" => "Kassio",
        "developer_description" => "Kassio é um desenvolvedor apaixonado por jogos de corrida que se destacam pela velocidade, adrenalina e desafios únicos.",
        "developer_personality" => "Energético, competitivo e focado na experiência do jogador.",
        "developer_image" => "../assets/imagens/equipe/kassio.jpg"
    ),
    "speed_bird" => array(
        "title" => "Speed Bird",
        "description" => "Speed Bird é um jogo frenético onde você controla um pássaro veloz em busca de desafios aéreos e tesouros escondidos.",
        "main_image" => "../assets/imagens/speed_bird_images/bird.jpg",
        "video" => "https://www.youtube.com/watch?v=9b3GZxxVp5Y",
        "carousel_images" => array(
            "../assets/imagens/speed_bird_images/f1.png",
            "../assets/imagens/speed_bird_images/f2.png",
            "../assets/imagens/speed_bird_images/f3.png"
        ),
        "developer" => "Samuel Ernandes",
        "developer_description" => "Samuel Ernandes é um desenvolvedor apaixonado por jogos que exploram a liberdade do voo e desafios aéreos emocionantes.",
        "developer_personality" => "Aventureiro, criativo e comprometido com a excelência.",
        "developer_image" => "../assets/imagens/equipe/samuel_ernandes.jpg"
    ),
);

function gameExists($game_slug) {
    global $games;
    return array_key_exists($game_slug, $games);
}

function getGameData($game_slug) {
    global $games;
    if (gameExists($game_slug)) {
        return $games[$game_slug];
    } else {
        return null;
    }
}

// Define o tipo de conteúdo da resposta como JSON
header('Content-Type: application/json');

// Verifica se o parâmetro "game" está presente na URL
if (isset($_GET['game'])) {
    $game_slug = $_GET['game'];
    $game_data = getGameData($game_slug);
    if ($game_data) {
        // Adiciona as URLs completas para as imagens do jogo
        $game_data['main_image'] = getFullUrl($game_data['main_image']);
        $game_data['developer_image'] = getFullUrl($game_data['developer_image']);
        foreach ($game_data['carousel_images'] as &$carousel_image) {
            $carousel_image = getFullUrl($carousel_image);
        }
        unset($carousel_image); // Limpa a referência

        echo json_encode($game_data);
    } else {
        echo json_encode(array("error" => "Jogo não encontrado"));
    }
} else {
    // Se o parâmetro "game" não estiver presente, retorna todos os jogos
    $all_games = array();
    foreach ($games as $slug => $game) {
        $game['main_image'] = getFullUrl($game['main_image']);
        $game['developer_image'] = getFullUrl($game['developer_image']);
        foreach ($game['carousel_images'] as &$carousel_image) {
            $carousel_image = getFullUrl($carousel_image);
        }
        unset($carousel_image); // Limpa a referência

        $all_games[] = array(
            "slug" => $slug,
            "title" => $game["title"],
            "main_image" => $game["main_image"],
            "developer" => $game["developer"],
            "developer_description" => $game["developer_description"]
        );
    }
    echo json_encode($all_games);
}

// Função para obter URL completa para imagens
function getFullUrl($image_path) {
    return "https://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" . $image_path;
}
?>