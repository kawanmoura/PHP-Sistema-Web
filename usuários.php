<?php
    include("./conexao/conexao.php");

    $consulta = "SELECT * FROM user";

    // die vai matar a conexão do programa se não dar cert

    /* 
        (->) esse operador é conhecido informalmente como seta,
        serve para acessar propriedades ou métodos de um objeto.
    */

    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body class="bg-primary">
    <div class="container">
        <?php 
            include("nav.php");
        ?>
        <h1>Usuários</h1>

        <table class="table table-striped border text-center table-dark">
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Empresa</th>
            <th>Telefone</th>
            <th></th>
            <?php while($dado = $con->fetch_array()) { ?>
                <tr>
                    <th><?php echo $dado["id"] ?></th>
                    <td><?php echo $dado["nome"] ?></td>
                    <td><?php echo $dado["email"] ?></td>
                    <td><?php echo $dado["empresa"] ?></td>
                    <td><?php echo $dado["tel"] ?></td>
                    <td class="">
                        <a href="excluir.php?codigo=<?php echo $dado["id"] ?>">
                            <i class="bi-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>