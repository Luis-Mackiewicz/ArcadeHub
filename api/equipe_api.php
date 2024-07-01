<?php
// Dados da equipe
$teamMembers = array(
    array(
        "name" => "Luis Mackiewicz",
        "position" => "Desenvolvedor",
        "description" => "Luis Mackiewicz é um desenvolvedor apaixonado por criar experiências únicas em jogos.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Pedro Rorato",
        "position" => "Desenvolvedor",
        "description" => "Pedro Rorato é um desenvolvedor experiente, especializado em jogos de ação e estratégia.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Gabriel de Barros",
        "position" => "Desenvolvedor",
        "description" => "Gabriel de Barros é um desenvolvedor entusiasta por criar jogos que combinam desafios emocionantes com gráficos vibrantes.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Raul Miguel",
        "position" => "Desenvolvedor",
        "description" => "Raul Miguel é um desenvolvedor apaixonado por criar jogos que desafiam a mente dos jogadores com enigmas intrigantes e design criativo.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Kassio",
        "position" => "Desenvolvedor",
        "description" => "Kassio é um desenvolvedor apaixonado por jogos de corrida que se destacam pela velocidade, adrenalina e desafios únicos.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Samuel Ernandes",
        "position" => "Desenvolvedor",
        "description" => "Samuel Ernandes é um desenvolvedor apaixonado por jogos que exploram a liberdade do voo e desafios aéreos emocionantes.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
);

// Define o tipo de conteúdo da resposta como JSON
header('Content-Type: application/json');

// Retorna os dados da equipe como JSON
echo json_encode($teamMembers);
?>
