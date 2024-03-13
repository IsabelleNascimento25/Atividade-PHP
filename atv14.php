
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>REDONDO NAO REDONDO</title>
</head>

<h1>Verificação de número</h1>
 
    <form method="get" action="">
        <input name="num" type="text">
        <button type="submit">Verificar</button>
    </form>
 
    <?php
 
        if (isset($_GET['num'])) {
 
            $num = $_GET['num'];
 
            if ($num % 10 == 0) {
                echo $num . "</br>";
                echo "O número informado é redondo ";
            }
            else {
                echo $num . "</br>";
                echo "O número informado não é redondo";
            }
        }
 
    ?>
</html>

