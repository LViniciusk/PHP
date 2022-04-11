<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis</title>
</head>
<body>
    <?php 
        $x = "abc";
        $$x = "def";
        echo "A variavel X recebe $x";
        echo "<br> E a Variavel ABC recebe $abc";
    ?>
</body>
</html>