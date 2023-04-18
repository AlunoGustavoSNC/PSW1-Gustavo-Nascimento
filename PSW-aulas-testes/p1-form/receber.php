<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber fomulário</title>
</head>
<body>
    <?php
        echo $_GET['nome'];
        echo '<br><br>';
        echo $_GET['cpf'];
        echo '<br><br>';
        echo $_GET['email'];
        echo '<br><br>';
        echo $_GET['senha'];
        echo '<br><br>';
        echo $_GET['cidade'];
        echo '<br><br>';
        echo $_GET['estado'];
        echo '<br><br>';
        echo $_GET['cep'];
        echo '<br><br>';
        echo $_GET['ocupacao'];
        echo '<br><br>';
        echo $_GET['instituicao'];
    ?>
</body>
</html>

