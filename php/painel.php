<?php
session_start();

// Verificando se o usuário é o mesmo da sessão
if (!$_SESSION['username']) {
    header('Location: login.php');
    exit();
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
        <link rel="stylesheet" href="../css/painel.css">
        <link rel="stylesheet" href="../css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="icon" href="img/logo.png">
    </head>
    <body>
        <header>
            <p>Painel de Controle</p>    
        </header>
        <main>
            <div class="usuarios">
                    <button onclick="cadastrar_open()" id="cadastrar">Cadastrar usuário</button>
                    <button class="bt-alternative" onclick="remover_open()" id="remover">Remover usuário</button>
                    <div class="form-cadastrar" id="form-cadastrar">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            Usuário: <input type="text" placeholder="Seu login." name="username">
                            <br>
                            Senha: <input type="password" placeholder="Sua senha." name="password">
                            <br>
                            <button type="submit">Cadastrar</button>
                        </form>
                    </div>
                    <div class="form-remover" id="form-remover">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            Usuário: <input type="text" placeholder="Seu login." name="username">
                            <br>
                            Senha: <input type="password" placeholder="Sua senha." name="password">
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