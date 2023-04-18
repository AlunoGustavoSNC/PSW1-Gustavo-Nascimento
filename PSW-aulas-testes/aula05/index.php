<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO | POST & GET</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div id="card">
        <h1>FORMULÁRIO | POST & GET</h1>

        <form action="recebe_post.php" method="get">
            <p>Nome: <input type="text" name="nome" id="nome"></p>
            <p>Endereço: <input type="text" name="end" id="end"></p>
            <p>Idade: <input type="number" name="idade" id="idade"></p>

            <div id="btn">
                <input type="submit" value="ENVIAR">
                <input type="submit" value="CANCELAR">          
            </div>
        </form>
    </div>
    <?php
        /*
        $nome = $_POST['nome'];
        $end = $_POST['end'];
        $idade = $_POST['idade'];

        echo $_POST['nome']
        */
    ?>
</body>
</html>