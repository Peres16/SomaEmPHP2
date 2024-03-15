<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e faz o cálculo da soma de 2 números</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>SOMA DE 2 NUMEROS</h3>";
    echo "<hr size='3' color='red'>";
    //Recupera os valores informados nas caixas de textos e armazena nas variaveis,nas linhas abaixo
    $num1 =$_POST["numero1"];
    $num2 =$_POST["numero2"];
    echo "numero1: " .$num1; echo"<br>";
    echo "numero2: " .$num2;
    echo "<hr size='3' color='blue' align='left'
    width='165'>";
    //efetuando e exibindo o calculo
    $soma = $num1 + $num2;
    echo "A soma de $num1 com $num2 é " .$soma;

    ?>
</body>
</html>