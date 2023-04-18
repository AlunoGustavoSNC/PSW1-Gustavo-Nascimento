<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="../style.css">

    <style>
        body{
            padding: 20px;
        }

        span{
            color: gray;
            margin-left: 10px;
        }

        form{
            border: 1px solid;
            border-radius: 10px;
            padding: 20px;
            width: 1000px;
            margin-left: 0px;
        }

        input{
            margin-right: 50px;
            background-color: transparent;
            border: 1px solid black;
            padding: 2px;
            border-radius: 5px;
        }

        .button{
            background-color: transparent;
            padding: 5px;
            margin-right: 10px
        }

        .button:hover{
            background-color: green;
        }

    </style>
</head>
<body>
    <?php
        $nome1 = [10];

        $nome1[0] = "Gustavo";
        $nome1[1] = "IF Baiano";
        $nome1[2] = "Joãozinho";

        echo $nome1[0] ."<br>";
        echo $nome1[1] ."<br>"; 
        echo $nome1[2] ."<br>";

        echo $nome1[0] . " " . $nome1[2] . "<br>";
    ?>
<br>
<br>
    <?php
        $nome2 = array("Gustavinho", "Instituto Baiano", "kekeu");

        echo $nome2[0] ."<br>";
        echo $nome2[1] ."<br>";
        echo $nome2[2] ."<br>";
    ?>
<br>
<br>
    <?php
        $nome3 = array("Victor Hugo", "17 anos", "feminino");

        for($n=0; $n<count($nome3); $n++){

            echo $nome3[$n] ."<br>";


        }
    ?>
<br>
<br>
    <?php
        $vetor = [10];

        for($a=0; $a<10; $a++){

            $vetor[$a] = $a + 1;

        }

        for($a=0; $a<10; $a++){

            echo $vetor[$a] . " ";

        }
        
    ?>

    <br>
    <br>

    <form action="">
        <span>NOME</span>
        <input type="text" name="nome" id="">

        <span>IDADE</span>
        <input type="text" name="idade" id="">

        <span>SEXO</span>
        <input type="text" name="sexo" id="">

        <input class="button" type="button" value="Enviar">
    </form>

    <?php
        echo seu nome é $_GET["nome"];
    ?>
</body>
</html>