<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
        function soma($a,$b){
            $r = $a + $b;
            print "A soma entre $a e $b vale $r <br>";
        }

        soma(5,2);
        soma(20,5);

        print "<br><br>";

        function somaR($a, $b){
            $r = $a + $b;
            return $r;
        }
        $x = 10; $y = 20;
        $res = somaR($x, $y);
        print "A soma entre $x e $y vale $res";
        

    ?>

</body>
</html>