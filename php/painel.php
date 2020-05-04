<?php
session_start();

// Verificando se o usuário é o mesmo da sessão
if (!$_SESSION['username']) {
    header('Location: login.php');
    exit();
}
?> 