<?php
    function conectar(){
        $conn = mysqli_connect('localhost', 'root', 'root', 'tarefas') or die("NÃO FOI POSSÍVEL CONECTAR AO SERVIDOR");
        return $conn;
    }

    function inserir($data, $materia, $conteudo){
        $query = "INSERT INTO atividades(dia, materia, conteudo) VALUES('".$data."', '".$materia."', '".$conteudo."')";
        return $query;
    }

    function pegarDados(){
        $query = "SELECT * FROM atividades";
        $result = mysqli_query(conectar(), $query);
        return $result;
    }

    function removerRegistro($num){
        $query = "DELETE FROM atividades WHERE id=".$num;
        $result = mysqli_query(conectar(), $query);
        return $result;
    }
?>