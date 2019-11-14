<?php
    include "bancodados.php";

    $data = isset($_POST["data"])?$_POST["data"]:"NULL";
    $materia = isset($_POST["materia"])?$_POST["materia"]:"NULL";
    $conteudo = isset($_POST["conteudo"])?$_POST["conteudo"]:"NULL";

    $conn = conectar();
    
    $query = inserir($data, $materia, $conteudo);

    if(mysqli_query($conn, $query)){
        mysqli_close($conn);
        header("Location: index.php");
    } else {
        echo "OCORREU UM ERRO FATAL DURANTE A TRANSIÇÃO DE DADOS";
    }
?>