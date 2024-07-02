<?php
// Dados da equipe
$teamMembers = array(
    array(
        "name" => "Luis Mackiewicz",
        "position" => "Desenvolvedor",
        "description" => "Luis Mackiewicz é um desenvolvedor talentoso, criador do jogo BombSword.",
        "image" => "../assets/imagens/equipe/luis.jpeg"
    ),
    array(
        "name" => "Pedro Rorato",
        "position" => "Desenvolvedor",
        "description" => "Pedro Rorato é um desenvolvedor experiente, conhecido por Bamboo Strike.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Gabriel de Barros",
        "position" => "Desenvolvedor",
        "description" => "Gabriel de Barros é um desenvolvedor entusiasta, criador do jogo Bubble Kid.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Raul Miguel",
        "position" => "Desenvolvedor",
        "description" => "Raul Miguel é um desenvolvedor criativo, responsável pelo jogo Desordeon.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Kassio",
        "position" => "Desenvolvedor",
        "description" => "Kassio é um desenvolvedor apaixonado por velocidade, criador do jogo ExplosionRace.",
        "image" => "../assets/imagens/equipe/pessoa1.webp"
    ),
    array(
        "name" => "Samuel Ernandes",
        "position" => "Desenvolvedor",
        "description" => "Samuel Ernandes é um desenvolvedor fascinado por desafios aéreos, responsável pelo jogo Speed Bird.",
        "image" => "../assets/imagens/equipe/samuel.jpeg"
    ),
);

// Define o tipo de conteúdo da resposta como JSON
header('Content-Type: application/json');

// Retorna os dados da equipe como JSON
echo json_encode($teamMembers);
?>
