<?php
session_start();

// Verificando se o usuário é o mesmo da sessão
if (!$_SESSION['username']) {
    header('Location: login.php');
    exit();
}
// Inserindo no Banco de Dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect_db.php';
    $username = mysqli_real_escape_string($connect, $_POST['newusername']);
    $query = "SELECT username FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        $_SESSION['operation'] = '<p>Operação negada, usuário já cadastrado!</p>';
        header('Location: op_negada.php');
        exit();
    } else {
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $password = mysqli_real_escape_string($connect, $_POST['newpassword']);
        $query  = "INSERT INTO usuarios(name,username,password) VALUES('$name','$username', md5('$password'));";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $_SESSION['operation'] = '<p>Operação realizada com sucesso!</p>';
            header('Location: op_realizada.php');
            exit();
        } else {
            echo 'Error '.mysqli_error($connect);
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>N2E - Núcleo de Eletricidade</title>
        <meta charset="utf-8">
        <meta name="viewports" content="width = device-width, initial-scale = 1"> 
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="../css/painel.css">
        <link rel="stylesheet" href="../css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="icon" href="../img/logo.png">
    </head>
    <body>
        <header>
            <p>Painel de Controle</p>
            <a href="logout.php"><button>Sair</button></a>
        </header>
        <main>
            <div class="usuarios">
                    <button onclick="cadastrar_open()" id="cadastrar">Cadastrar usuário</button>
                    <button class="bt-alternative" onclick="remover_open()" id="remover">Remover usuário</button>
                    <div class="form-cadastrar" id="form-cadastrar">
                        <form name="form_cadastrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            Usuário: <input type="text" placeholder="Seu login." name="username">
                            <br>
                            Senha: <input type="password" placeholder="Sua senha." name="senha">
                            <br>
                            Repita a senha: <input type="password" placeholder="Sua senha." name="rep_senha">
                            <br>
                            <input type="submit"  onclick="return validar()">
                        </form>
                    </div>





                    <div class="form-remover" id="form-remover">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            Usuário: <input type="text" placeholder="Seu login." name="remove_username">
                            <br>
                            <button type="submit" class="bt-alternative">Remover</button>
                        </form>
                    </div>
            </div>
        </main>
        <!-- Inicio Footer
        <footer>
            <p>© 2020 N2E - Furg. Todos os direitos reservados<br>Contato:
                <a href="projeton2e@furg.com">projeton2e@furg.com
                </a>.
            </p>
            <a href="php/login.php">
                <p class="arearestrita">
                    Área Restrita
                </p>
            </a>
        </footer>
        -->
        <script src="../js/painel.js"></script>
    </body>

</html>