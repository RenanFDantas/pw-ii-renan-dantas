<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Último número</title>
</head>
<body>
    <?php
        function ultimoItem($a, $b, $c) {
            $meuArray = array(0 =>$a, 1=>$b, 2=>$c);
            return $meuArray[2];
        }

        echo "O último item deste array [2, 43, 15] é" . ultimoItem([2, 43, 15]) . "<br>";
    ?>
</body>
</html>