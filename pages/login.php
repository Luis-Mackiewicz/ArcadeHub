<?php include('../includes/header.php'); ?>

<section class="main-content">
    <h1>Login</h1>
    <!-- Formulário de login (exemplo básico) -->
    <form action="../auth/login-process.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Entrar</button>
    </form>
</section>

<?php include('../includes/footer.php'); ?>
