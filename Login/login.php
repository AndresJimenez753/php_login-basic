<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&family=Nunito:wght@200;500;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/php.png">

    <!-- Linkeamientos de estilos css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css"><!-- Normalize sirve para eiminar los espacios de scroll -->

    <!-- Titulo y fabicon -->
    <title>Login - PHP</title>
</head>
<body>
    <!-- Separamiento de la pagina en dos partes -->
    <main class="login-desing">
        <!-- "wabes" Parte izquierda del login y la class "login" parte derecha donde ira el formilario -->
        <div class="waves">
            <img class="image-login-left" src="assets/loginPerson.png" alt="">
        </div>
        <div class="login">
            <div class="login-data">
                <img src="assets/collab.png" alt="">
                <h1>Login</h1>
                <form action="logic/loguear.php" class="login-form" method="POST">
                    <div class="input-group">
                        <label class="input-fill" for="">
                            <input type="email" name="email" id="email" required>
                            <span class="input-label">Email</span>
                            <i class="fas fa-envelope"></i>
                        </label>
                    </div>
                    <div class="input-group">
                        <label class="input-fill" for="">
                            <input type="password" name="pass" id="pass" required>
                            <span class="input-label">Password</span>
                            <i class="fas fa-lock"></i>
                        </label>
                    </div>
                    <a href="#">You need new account?</a>
                    <input type="submit" value="Login" class="btn-login">
                </form>
            </div>
        </div>
    </main>

    <!-- Scripts -->

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/175e5f06d9.js" crossorigin="anonymous"></script>
</body>
</html>