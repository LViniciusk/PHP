<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="tabuada2.php" method="post">
        <label for="itab">Numero: </label>
        <select name='num' id='itab'>
        <?php 
            $c = 1;
            do{
                echo "<option value='$c'>$c</option>";
                $c++;
            }while($c <=10);
        ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>