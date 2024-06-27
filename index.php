<?php include './includes/header.php'; ?>

<?php
// Define o conteúdo padrão ou obtém de uma requisição, por exemplo, via GET
$page = isset($_GET['page']) ? $_GET['page'] : 'main';

// Caminho base para os arquivos de conteúdo
$contentPath = 'content/';

// Arquivo de conteúdo a ser incluído
$contentFile = $contentPath . $page . '.php';

// Verifica se o arquivo existe antes de incluir
if (file_exists($contentFile)) {
    include($contentFile);
} else {
    // Conteúdo alternativo ou mensagem de erro se o arquivo não existir
    echo "<p>Desculpe, a página solicitada não foi encontrada.</p>";
}
?>

<?php include './includes/footer.php' ?>