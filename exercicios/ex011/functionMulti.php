<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php 
        function soma(){
            $p = func_get_args();
            $n = func_num_args();
            $r = 0;
            for ($i=0;$i < $n; $i++){
                $r+= $p[$i];
                print "$r ";
            }
            return $r;
        }

        $res = soma(5, 1, 5, 5, 4);
        print "<br>A soma dos valores é $res"
    
    ?>
</body>
</html>