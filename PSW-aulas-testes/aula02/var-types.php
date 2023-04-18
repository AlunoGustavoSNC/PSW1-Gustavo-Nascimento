<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tipos de variaveis</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>TIPOS DE VARIAVEIS</h1>
    </header>
    <main>
        <div class="box">
            <?php 
                $var = "Bill Gates";        // string
                $tipo = gettype($var);
                echo "$var ($tipo) <br>";

                $var = 12;                  // inteiro
                $tipo = gettype($var);
                echo "$var ($tipo) <br>";

                $var = 1.999;               // float/double
                $tipo = gettype($var);
                echo "$var ($tipo) <br>";
                
                $var = true;                // booleano
                $tipo = gettype($var);
                echo "$var ($tipo) <br>";
            ?>
        </div>

        <div class="box">
            <?php
                $data = "25/10/2022";
                $tipo = gettype($data);
                echo "$data ($tipo) <br>";

                $data = 25/10/2022;
                $tipo = gettype($data);
                echo "$data ($tipo) <br>";
             
                $data = date('25/10/2022');
                $tipo = gettype($data);
                echo "$data ($tipo) <br>";
            ?>
        </div>

        <div class="box">
            <?php

                if(is_null($var1)){
                    echo "Variável $var1 é nula! <br>";
                }

                $var1 = "Bill Gates";                 
                if(is_string($var1)){
                    echo "Variável $var1 é string! <br>";
                }
                
                $var1 = 10;
                if(is_integer($var1)){
                    echo "Variável $var1 é inteiro! <br>";
                }

                $var1 = true;
                if(is_bool($var1)){
                    echo "Variável $var1 é booleano! <br>";
                }

                $var1 = 5.54;
                if(is_float($var1)){
                    echo "Variável $var1 é float! <br>";
                }

                $var1 = 3.32452454353445;
                if(is_double($var1)){
                    echo "Variável $var1 é double! <br>";
                }                  
            ?>
        </div>
    </main>
</body>
</html>