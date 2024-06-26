<?php
// Dados dos jogos com base nas informações fornecidas
$games = [
    [
        'nome' => 'BombSword',
        'descricao' => 'Um guerreiro caçando fantasmas com uma espada explosiva no vale da morte.',
        'imagem' => 'assets/imagens/BombSword/Luis_i2.jpg',
        'desenvolvedor' => 'Luis Mackiewicz',
        'personalidade' => 'Entusiasta da fantasia, criativo, sonhador.'
    ],
    [
        'nome' => 'Bamboo Strike',
        'descricao' => 'Design de um samurai cortando bambus com precisão, foco na fluidez dos movimentos.',
        'imagem' => 'assets/imagens/Bamboo_Strike/samurai.jpg',
        'desenvolvedor' => 'Pedro Rorato',
        'personalidade' => 'Estudante de Tads, disciplinado, focado.'
    ],
    [
        'nome' => 'Bubble Kid',
        'descricao' => 'Criação de uma bolha mágica explorando um mundo colorido.',
        'imagem' => 'assets/imagens/Bubble_Kid/bolha.jpg',
        'desenvolvedor' => 'Gabriel de Barros',
        'personalidade' => 'Sonhador, imaginativo e determinado.'
    ],
    [
        'nome' => 'Desordeon',
        'descricao' => 'Desenvolvimento de um jogo onde um macaco explora sua floresta em busca de bananas.',
        'imagem' => 'assets/imagens/Desordeon/monkey.jpg',
        'desenvolvedor' => 'Raul Miguel',
        'personalidade' => 'Amante da natureza, curioso, alegre.'
    ],
    [
        'nome' => 'ExplosionRace',
        'descricao' => 'Criação de uma corrida emocionante com mecânicas desafiadoras de desvio de obstáculos.',
        'imagem' => 'assets/imagens/ExplosionRace/ExplosionRace.png',
        'desenvolvedor' => 'Kassio',
        'personalidade' => 'Entusiasta de velocidade, gosta de desafios.'
    ],
    [
        'nome' => 'Speed Bird',
        'descricao' => 'Desenvolvimento de um jogo onde os jogadores assumem o papel de um pássaro veloz explorando os céus.',
        'imagem' => 'assets/imagens/Speed_Bird/bird.jpg',
        'desenvolvedor' => 'Samuel Ernandes',
        'personalidade' => 'Otimista, confiante e objetivo.'
    ]
];

// Configuração do cabeçalho para retornar JSON
header('Content-Type: application/json');

// Retornando os dados dos jogos como JSON
echo json_encode($games);
?>
