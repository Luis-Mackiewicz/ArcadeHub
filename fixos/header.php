<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/path/to/your/custom/styles.css">
    <style>
        .login-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .login-box h5 {
            margin-bottom: 20px;
        }
        .login-box .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="../favicon.ico" alt="Logo" height="30">
            </a>

            <!-- Equipe -->
            <a class="nav-link" href="equipe.php">Equipe</a>

            <!-- Toggle Games -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarGames" aria-controls="navbarGames" aria-expanded="false" aria-label="Toggle navigation">
                Games <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarGames">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/bamboo_strike.php">Bamboo Strike</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bomb_sword.php">Bomb Sword</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bubble_kid.php">Bubble Kid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="explosion_race.php">Explosion Race</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="desordeon.php">Desordeon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="speed_bird.php">Speed Bird</a>
                    </li>
                </ul>
            </div>

            <!-- Login -->
            <div class="nav-item ms-auto">
                <a class="nav-link" href="#" onclick="showLoginBox()">
                    <img src="/path/to/your/login-icon.png" width="30" height="30" alt="Login">
                </a>
            </div>
        </div>
    </nav>

    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login-process.php" method="POST">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script src="assets/js/scripts.js"></script>
    <script>
        function showLoginBox() {
            document.getElementById('loginBox').style.display = 'block';
        }

        function hideLoginBox() {
            document.getElementById('loginBox').style.display = 'none';
        }
    </script>
</body>
</html>
