<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01</title>
</head>
<body>
    <form method="post" action="ex01-2.php">
    <?php 
        $c = 1;
        while ($c<=5){
            echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>";
            $c++;
        }
    ?><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>