<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Resultado</h1>

    <?php
    $idade = $_GET['idade'];

    if ($idade < 16) {
        $vota = "não precisa votar";
    } else {
        if (($idade >= 16 && $idade < 18) || ($idade > 70)) {
            $vota = "vota se quiser";
        } else {
            $vota = "vota obrigatoriamente";
        }
    }
    echo "Sua idade é $idade, e você $vota"
        ?>
    <br>
    <a href="funcaose.html"><button>Voltar</button></a>

</body>

</html>