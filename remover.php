<?php

    remover();

    function remover(){

        $num = $_GET["num"];

        $dados = file('banco.txt'); 

        $total = count($dados); 

        $resultado = ''; 
        for($i=0; $i<$total; $i++){ 
        if($i == $num){ 

        } else {
            $resultado .= $dados[$i];
        }
        } 

         $arquivo = fopen('banco.txt', 'w'); 
         fwrite($arquivo, $resultado); 
         fclose($arquivo);
         
         header("Location: index.php");
    }
?>