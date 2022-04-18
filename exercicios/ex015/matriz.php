<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <pre>
        <?php
            $pessoa = array( array("Nome" => "Jeremias",
                              "Idade" => 16,
                              "Peso" => 69.3),

                        array("Nome" => "Jorge",
                              "Idade" => 20,
                              "Peso" => 81.6),

                        array("Nome" => "Joao",
                              "Idade" => 23,
                              "Peso" => 76.2),);
            foreach ($pessoa as $v){
                foreach ($v as $n => $c){
                    print ("<br>$n: $c");
                }
            }
        ?>
    </pre>
</body>
</html>