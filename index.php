<!DOCTYPE html>
    <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link rel='stylesheet' href='css/index.css'>
            <link rel='stylesheet' href='css\bootstrap.min.css'>
            <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
            <title>EEJM - Tarefas</title>
        </head>
        <body>
            <div style='padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;'>
            <table style='border-top:3px solid black; margin-left: 50%; transform: translate(-50%); width: 100%'>
                <thead>
                    <th style='text-align:center'>DATA</th>
                    <th style='text-align:center'>MATÉRIA</th>
                    <th style='text-align:center'>CONTEÚDO</th>
                </thead>
                <tbody>
                <?php
                    include "bancodados.php";

                    $contvisitas = 'visitas.txt';
                    $tamvisitas = filesize($contvisitas);
                    $visitasopen = fopen($contvisitas, 'r');
                    $linha = fgets($visitasopen, $tamvisitas);
                    $tot = substr($linha,0,$tamvisitas);
                    fclose($visitasopen);
                    $atuavisitas = fopen('visitas.txt', 'w+');
                    fclose($atuavisitas);
                    $nvtot = $linha + 1;
                    $novo = fopen('visitas.txt', 'a');
                    fwrite($novo, $nvtot .' ');
                    fclose($novo);
                    echo "<script>console.log('Contador de visitas: ".$nvtot."')</script>";
                    ini_set('display_errors', 0 );
                    error_reporting(0);

                        if(mysqli_num_rows(pegarDados()) == 0){
                            echo "<h1 style='text-align: center;'><b>Lista de atividades vazia</b></h1>";
                        } else {
                            echo "<h1 style='text-align: center;'><b>Lista com as próximas atividades</b></h1>";                           

                            $result = pegarDados();

                            $ar = Array();

                            while($row = mysqli_fetch_array($result, MYSQL_NUM)){
                                echo "<tr class='tr".$row[0]."'>";
                                echo "<td>".date('d/m/Y', strtotime($row[1]))."</td>";
                                echo "<td>".$row[2]."</td>";
                                echo "<td><a class='a'><b>Ver Conteúdo</b></a></td>";
                                echo "<td class='ct' style='display: none'>".$row[1]." - ".$row[2]."\n\n".$row[3]."</td>";
                                echo "<td><a href='remover.php?num=".$row[0]."' class='btn btn-danger'>Excluir</a></td>";
                                echo "</tr>";
                            }
                        }
                ?>
            </tbody>
            </table><br>
            <?php
                // if(date('Y-m-d') >= "2019-06-29" && date('Y-m-d') < "2019-07-15"){
                //     echo "<h2 class='ferias' style='text-align: center; font-size: 100px'>BOAS FÉRIAS</h2>";
                // }
            ?>
            <a href="index-add.html" class="btn btn-primary" style="margin-top:20px; margin-left: 31%; transform: translate(-50%);">Adicionar tarefas</a>
            <a href="horario.php" class="btn btn-success" style="margin-top:20px; margin-left: -50px">Ver Horário</a>
            </div>
        </body>
        <div style="margin-bottom: 35px">
            <h4 style="text-align: left; font-size: 20px;">Desenvolvedor: Higor Hicker</h4>
        </div>
        <script type="text/javascript">
            // var ferias = document.querySelector(".ferias");

            // ferias.style.color = "red"; 

            // setInterval( function() {
            //     if(ferias.style.color == "red"){
            //         ferias.style.color = "blue";
            //     } else if (ferias.style.color == "blue"){
            //         ferias.style.color = "red";
            //     }
            // }, 500 );

            ct = document.querySelectorAll(".ct");

            lis = document.querySelectorAll(".a");
         
            for(x=0;x<lis.length;x++){
                // arranjo os listeners com os index das linhas
                (function(index){
                    lis[x].addEventListener("click", function(){
                        alert(ct[index].textContent);
                    });
                })(x);
            }
        </script>
    </html>

