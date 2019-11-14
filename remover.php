<?php

    include "bancodados.php";

    remover();

    function remover(){

        $num = $_GET["num"];

        if(removerRegistro($num)){
            header("Location: index.php");
        } else {
            echo "OCORREU UM ERRO AO REMOVER ESSE REGISTRO";
        }
    }
?>