<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NEGATIVO POSITIVO</title>
    </head>
<body>
<form method="" action="">
        <input name="num" type="number">
        <button type="submit"> Enter </button>
    </form>
    <?php

        
//Criar um código para verificar se o número é positivo, negativo é neutro (zero). 

 if ((isset($_GET['num']))) {
    $num = $_GET['num'];
    

if ($num > 0)
    printf("O número   $num  é positivo.", $num);
else if ($num < 0)
    printf("O número $num  é negativo.", $num);
else if ($num == 0)
    printf("O número é considerado neutro.", $num);

return 0;
 }

?>

</body>
</html>

