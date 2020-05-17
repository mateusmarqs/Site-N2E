<?php
    session_start();
    if (!$_SESSION['username']) {
        header('Location: login.php');
        exit();
    }
?>
<hmtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewports" content="width = device-width, initial-scale = 1">
        <meta http-equiv="refresh" content="2; URL='painel.php'"/>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/op_realizada.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="icon" href="../img/logo.png"> 
    </head>
    <body>
        <div class="circulo">
        </div>
        <?php
        echo $_SESSION['operation'];
        ?>
    </body>    
</hmtl>