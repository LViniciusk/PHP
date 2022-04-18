<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <pre>
        <?php
            $n = array(3,5,8,2);
            $n[] = 7;
            print_r($n);
            print ("<br><br>");
            $c = range(0,10,2);
            print_r($c);
            print ("<br><br>");
            foreach($c as $v){
                print("$v ");
            }
            print ("<br><br>");
            $cad = array ("Nome" => "Jeremias", "Idade" => 23, "peso" => 79.4);
            foreach($cad as $key => $content){
                print("$key: $content <br>");
            }
        
        ?>
    </pre>
</body>
</html>