<?php
    include("./conexao/conexao.php");

    // Verificar se o parâmetro "código" está presente na URL
    if (isset($_GET['codigo'])) {
        $idParaExcluir = $_GET['codigo'];
     
        // Construir e execultar a consulta de exclusão
        $sql = "DELETE FROM listas WHERE id = $idParaExcluir";

        if ($mysqli->query($sql) === TRUE) {
            header("location: index.php");
        } else {
            echo "Erro ao excluir o registro";
        }
    }
?>