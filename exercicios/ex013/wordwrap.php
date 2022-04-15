<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r</title>
</head>
<body>
    <?php
        $t = "apenas um texto sem nenhum motivo aparente digitado apenas para ser gigante de forma que não preise de sentido algum para que seu proposito seja cumprido. saas";

        $r = wordwrap($t, 1, "<br>\n", false);
        print $r;
    ?>
</body>
</html>