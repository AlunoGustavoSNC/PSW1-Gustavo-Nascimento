<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            background-color: #9ffd;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box{
            background-color: #fff9;
            margin: 20px;
            padding: 10px;
            border-radius: 10px;
            width: 20%;
            box-shadow: 0 5px 10px ;
        }
        .box:hover{
            background-color: #fff7;
        }

    </style>
</head>
<body>

    <div class="box">
        <?php

        // Teste com variáveis string

            $txt01 = "Hello ";
            $txt02 = "World";

            echo "Hello $txt02 <br>";
            echo "$txt01 $txt02 <br>";
            echo "Hello ".$txt02. "<br>";
            echo $txt01."World <br>";
            echo $txt01.$txt02;

        ?>
    </div>

    <div class="box">
        <?php

            $x = 5;
            $y = 10;
            $total = $x + $y;

            echo "O valor total é: " .$total. "<br>";
            echo "O valor total é: $total <br>";

        ?>
    </div>

    <div class="box">
        <?php

            $x = 7;
            $y = 11;
            $total = $x + $y;

            echo "O valor de x é: ".$x."<br>O valor de y é: ".$y."<br>O valor total é: ".$total;

        ?>
    </div>

    <div class="box">
        <?php 
        
            echo "Esta ", "é ", "uma ", "mensagem ", "com ", "vírgula ";
        
        ?>
    </div>

    <div class="box">
        <?php

            $x = 7; 
            $y = 11;
            $total = $x + $y;
            $txt = "w3school.com";

            print "Estude PHP no ".$txt."<br>";
            print "O valor é: $x + $y";
            // print "O valor é: ".$x + $y; (não funciona)

        ?>
    </div>

</body>
</html>