<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <form action="/exercicio2" method="post">
        <label for="valor">Digite um valor:</label>
        <input type="number" name="valor">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_POST['valor']) {
            $value = $_POST['valor'];

            if ($value % 10 == 0)
                echo "<div>Esse número é divisivel por 10.</div>";

            if ($value % 5 == 0)
                echo "<div>Esse número é divisivel por 5.</div>";

            if ($value % 2 == 0)
                echo "<div>Esse número é divisivel por 2.</div>";

            if ($value % 10 != 0 && $value % 5 != 0 && $value % 2 != 0)
                echo "<div>Esse número não é divisivel por 10, 5 ou 2.</div>";
        }
    ?>
</body>
</html>