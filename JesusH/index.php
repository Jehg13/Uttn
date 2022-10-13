
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php echo "hello world!"; 
    //Esta es una variable declarada
    $color = "red";
    #Este es un texto
    echo "My car is = .$color. <br>" ;
    /*Estos son textos con variables no declaradas no les esta almacenando un valor por lo tanto no apareceran*/
    echo "My house is = .$COLOR. <br>";
    echo "My boat is = .$coLOR. <br>";

    ?>
</body>
</html>