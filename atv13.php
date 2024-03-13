<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>par ou impar </title>
</head>
<body>
    <h1> Código para verificação </h1>
    <!-- Código PHP -->

    <form method="" action="">
        <input name="num" type="number">
        <button type="submit"> Enter </button>
    </form>
    <?php
 if ((isset($_GET['num']))) {
    $num = $_GET['num'];
    

    function numeroRedondo($numero) {
        if ($numero % 1 === 0) {
            return true; // É redondo
        } else {
            return false; // Não é redondo
        }
    }
    
    // Teste da função
    $num = 10;
    if (numeroRedondo($num)) {
        echo "$num é um número redondo.";
    } else {
        echo "$num não é um número redondo.";
    }
}
    ?>
    ?>

</body>
</html>