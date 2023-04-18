<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relogio</title>
</head>
<body>
    <?php
        $hora = [23];
        $minuto = [59];
        $segundo = [59];

        for($h=0; $h<24; $h++){

            $hora[$h] = $h;

        }

        for($m=0; $m<60; $m++){

            $minuto[$m] = $m;

        }

        for($s=0; $s<60; $s++){

            $segundo[$s] = $s;

        }
        /*
        $h = 0;
        $m = 0;

        for($s=0; $s<60; $s++){

            echo $hora[$h] . " : " . $minuto[$m] . " : " . $segundo[$s] . "<br>";
            
            if($s==59){
                $m = $m + 1;
                $s = $s - 60;
            }

            if($m==59){
                $h = $h + 1;
                $m = $m - 60; 
            }

        }
        */
        
        for($h=0; $h<24; $h++){
            for($m=0; $m<60; $m++){
                for($s=0; $s<60; $s++){

                    echo $hora[$h] . " : " . $minuto[$m] . " : " . $segundo[$s] . "<br>"; 

                }
            }
        }
    ?>
</body>
</html>