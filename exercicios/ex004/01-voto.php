<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Obrigatorio</title>
</head>
<body>
    <?php 
        $ano = $_GET["a"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem $idade anos";
        $sit = ($idade > 18 && $idade <65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
        echo "<br>E dessa forma seu voto é $sit";
    
    
    ?>
</body>
</html>