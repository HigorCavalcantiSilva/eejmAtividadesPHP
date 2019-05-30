<?php
    $data = isset($_POST["data"])?$_POST["data"]:"NULL";
    $materia = isset($_POST["materia"])?$_POST["materia"]:"NULL";
    $conteudo1 = isset($_POST["conteudo"])?$_POST["conteudo"]:"NULL";

    $dataConvertida = date('d/m/Y', strtotime($data));

    $arquivo = 'banco.txt';
    $conteudo = $dataConvertida."_".$materia."_".trim($conteudo1)."\n";

    $arquivoAberto = fopen($arquivo, 'a');

    fwrite($arquivoAberto, $conteudo);

    fclose($arquivoAberto);

    header("Location: index.php");
?>