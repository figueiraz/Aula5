<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="enquanto.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função While</title>
</head>

<body>
    <h1>Função While / Enquanto</h1>

    <?php
    $c = 100;
    while ($c >= 0) {
        echo "$c - ";
        $c--;
    }
    ?>

    <br>
    <br>
    <?php
    $n = 0;
    $a = 0;

    while ($n <= 10) {
        $a += $n;
        $n++;
    }

    echo "A soma de 0 até 10 é $a"
        ?>

    <br>
    <a href="enquanto.html"><button>Voltar</button></a>

</body>

</html>