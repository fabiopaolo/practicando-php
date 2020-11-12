<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <p>hola</p>
    <?php
        echo("entrando al la comparacion en PHP ");
        echo "<br>";

        $variable1="Elisabeth";
        $variable2="ELISABETH";
        //Compara string distingue mayuscula y minuscula
        //devuelve 1 si no son iguales. 0 si son iguales
        $resultado=strcmp($variable1, $variable2);
        //if($resultado=1){evaluando si es verdadero}
        if($resultado){
            echo("no son iguales las palabras");
        }
        else{
            echo("coincide");
        }



    //Compara string no distingue mayuscula y minuscula

    $resultado2=strcasecmp($variable1, $variable2);


    ?>
</body>
</html>


