<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        $nome = $_POST['nome'];
        $end = $_POST['end'];
        $idade = $_POST['idade'];
        */

        $nome = $_GET['nome'];
    ?>

    <input type="text" name="text" value="<?php echo $nome ?>">
</body>
</html>