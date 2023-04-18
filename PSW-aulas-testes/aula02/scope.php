<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scope</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>SCOPE</h1>
    </header>
    <main>
        <div class="box">
            <div class="title02">
                <h2>SCOPE GLOBAL</h2>
            </div>

            <?php
                $var1 = 5;      // Global Scope

                function test1(){
                    //usando "var1" dentro desta função ira gerar um erro
                    echo "</p> Variavel var dentro da função é: $var1</p>";
                }

                test1();

                echo "<p>Variavel var fora da função é: $var1</p>";
            ?>
        </div>
        <div class="box">
            <div class="title02">
                <h2>LOCAL SCOPE </h2>
            </div>

            <?php
                function test2(){
                    $var2 = 5;      // Local Scope

                    echo "</p> Variavel var dentro da função é: $var2</p>";
                }

                test2();

                //usando "var2" fora da função ira gerar um erro
                echo "<p>Variavel var fora da função é: $var2</p>";
            ?>
        </div>
        <div class="box">
            <div class="title02">
                <h2>STATIC SCOPE</h2>
            </div>
            
            <?php
                function test3(){
                    static $var3 = 0;   // Local Scope

                    echo "$var3 <br>";
                    $var3++;
                }

                test3();
                test3();
                test3();
                test3();

                //usando "var2" fora da função ira gerar um erro
                echo "<p>Variavel var fora da função é: $var3</p>";
            ?>
        </div>
    </main>
</body>
</html>