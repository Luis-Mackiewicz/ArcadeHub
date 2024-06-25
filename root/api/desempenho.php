<!-- api/desempenho.php -->
<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Aqui você pode salvar os dados em um banco de dados ou enviá-los por email
    // Para este exemplo, apenas retornaremos uma resposta JSON

    $response = [
        'status' => 'success',
        'message' => 'Feedback recebido com sucesso!',
        'data' => [
            'name' => $name,
            'email' => $email,
            'feedback' => $feedback
        ]
    ];
    echo json_encode($response);
} else {
    $response = [
        'status' => 'error',
        'message' => 'Método não permitido'
    ];
    echo json_encode($response);
}
?>
