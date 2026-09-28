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
                <td>Nome </td>
                <td>Idede</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
</html>