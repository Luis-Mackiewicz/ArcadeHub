<?php include_once "../fixos/header.php"; ?>

<main>
    <div class="container">
        <h2>Login</h2>
        <!-- Formulário de login -->
        <form action="../autenticacao/login-process.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <?php
        // Exibe mensagem de erro, se houver
        if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
            echo '<div class="alert alert-danger mt-3" role="alert">Credenciais inválidas. Por favor, tente novamente.</div>';
        }
        ?>
    </div>
</main>

<?php include_once "../fixos/footer.php"; ?>
