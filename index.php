<?php
    $conn = new mysqli("localhost", "root", "", "teste");

    $result = $conn->query("SELECT * FROM pessoas");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <tr></tr>
    <table>
        <thead>
            <tr>
                <td><h2>Nome</h2></td>
                <td><h2>Idade</h2></td>
            </tr>
        </thead>
        <tbody>
            <?php $linha = $result->fetch_assoc(); ?>
            <td>
                <?php
                    echo $linha ['nome'];
                ?>
            </td>
            <td>
                <?php
                    echo $linha ['idade'];
                ?>
            </td>
        </tbody>
    </table>
</body>
</html>