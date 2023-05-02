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
    if (isset($_POST['gerar-tabuada'])) {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
        }
    }
        ?>
    <br>
    <a href="tabuada.html"><button>Voltar</button></a>







</body>

</html>