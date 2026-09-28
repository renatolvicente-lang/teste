<?php
    $conn  = new mysqli("localhost", "root", "", "teste");

    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM pessoas WHERE id = $id ");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome_novo = $_POST["nome"];

        $result =  $conn->query("UPDATE pessoas SET nome =  '$nome_novo' WHERE id = $id");
        
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php while($linha = $result->fetch_assoc()){ ?>
            <p>Bom dia, 
                <tr>
                    <td>
                        <?php
                            echo $linha ['nome'];
                        ?>
                    </td>
                </tr>
            .</p>

                <form action="" method="POST">
                    <label for="ome">nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="<?php echo $linha["nome"]?>">
                    <button type="submit">Atualizar</button>
                </form>
        <?php }?> 
</body>
</html>