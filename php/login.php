<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'connect_db.php';

  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $query = "SELECT * FROM usuarios WHERE username = '$username' AND password = md5('$password')";

  $result = mysqli_query($connect, $query);

  $row = mysqli_num_rows($result);

  if ($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: painel.php');
    exit();
  } else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>N2E - Núcleo de Eletricidade</title>
        <meta charset="utf-8">
        <meta name="viewports" content="width = device-width, initial-scale = 1"> 
        <meta name="description" content="Projeto desenvolvido na Universidade Federal de Rio Grande.">
        <meta name="keywords" content="n2e, nuclueo de eletricidade, n2e furg, projeto, projeto eletricidade.">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="formulario">
          <div class="caixa">
            <img class="logocbrilho" src="../img/logocombrilho.png">
              <?php
              if (isset($_SESSION['nao_autenticado']) == true) {
              ?>
              <p class="errorlogin"> Usuário ou senha incorreto.</p>
              <?php
              unset($_SESSION['nao_autenticado']);
              }
              ?>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                Usuário: <input type="text" placeholder="Seu login." name="username">
                Senha: <input type="password" placeholder="Sua senha." name="password">
                <button type="submit">Login</button>
              </form>
          </div>
        </div>
        <script src="https://kit.fontawesome.com/142a68963a.js" crossorigin="anonymous"></script>    
    </body>
</html>