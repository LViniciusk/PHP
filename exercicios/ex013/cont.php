<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>word count</title>
</head>
<body>
    <?php
        $f = "minha nossa nossa nossa";
        $cont = str_word_count($f,1);
        print_r($cont);
    ?>
</body>
</html>