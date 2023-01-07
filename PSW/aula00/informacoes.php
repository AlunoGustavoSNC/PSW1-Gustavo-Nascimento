<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & PHP</title>
</head>
<body>
    <p> isso vai ser ignorado pelo php e exibido pelo navegador</p>
    <?php 
        echo 'Enquanto isso vai ser interpretado'; // isso é um comentario que funciona somente nessa linha

        /* isso é oto tipo de comentatio */
    ?>
    <p>isto também vai ser ignorado pelo php e exibido pelo navegador</p>
</body>
</html>