<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1 class="text-center">Feedback de Desempenho do Site</h1>
    <form action="/api/desempenho.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="feedback" class="form-label">Feedback</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Feedback</button>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>
