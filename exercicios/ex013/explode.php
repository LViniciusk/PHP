<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Generico.</title>
</head>
<body>
    <?php
        $s = "Nem te Conto";
        $v = explode(" ", $s);

        print_r($v);

        print("<br>");
        $nome = "Jooj";
        $v2 = str_split($nome);

        print_r($v2);

        print("<br>");
        $v3[0] = "Nem";
        $v3[1] = "te";
        $v3[2] = "Conto";
        $r = implode(" - - - ", $v3); //join()
        print($r);
    ?>
</body>
</html>