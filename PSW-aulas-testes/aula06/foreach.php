<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Definição Implícita ou Direta</title>
</head>
<body style="font-family: 'verdana', sans-serif">
    <h1>Array - Definição Implícita ou Direta</h1>

    <?php 
    
        $num[0] = 23;
        $num[1] = 42;
        $num[2] = 54;

        for($i = 0; $i < count($num); $i++){
            echo "$num[$i] ";
        }

        echo "<br><br>";

        foreach($num as $i){
            echo "$i ";
        }
    
    ?>
</body>
</html>