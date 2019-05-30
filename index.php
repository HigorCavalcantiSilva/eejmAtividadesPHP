<!DOCTYPE html>
    <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link rel='stylesheet' href='css/index.css'>
            <link rel='stylesheet' href='css\bootstrap.min.css'>
            <title>EEJM - Tarefas</title>
        </head>
        <body>
            <div style='padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;'>
            <table style='margin-left: 50%; transform: translate(-50%); width: 100%'>
                <thead>
                    <th style='text-align:center'>DATA</th>
                    <th style='text-align:center'>MATÉRIA</th>
                    <th style='text-align:center'>CONTEÚDO</th>
                </thead>
                <tbody>
                <?php
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
                        $arquivo = 'banco.txt';
                        $tamanhoArquivo = filesize($arquivo);
                
                        $arquivoAberto = fopen($arquivo, 'r');
                        
                        if($tamanhoArquivo == 0){
                            echo "<h1 style='text-align: center;'><b>Lista de atividades vazia</b></h1>";
                        } else {
                            echo "<h1 style='text-align: center;'><b>Lista com as próximas atividades</b></h1>";
                            while(!feof($arquivoAberto)):
                                $linha = fgets($arquivoAberto, $tamanhoArquivo);
                                if($linha == ""){
                                    //nada
                                } else {
                                    $ar[] = explode("_", trim($linha));
                                }
                            endwhile;                            

                            $nbt = 0;
                            
                            foreach ($ar as $li){
                        
                                echo "<tr class='tr".$nbt."'>";
                                echo "<td>".$li[0]."</td>";
                                echo "<td>".$li[1]."</td>";
                                echo "<td>".$li[2]."</td>";
                                echo "<td><a href='remover.php?num=".$nbt."' class='btn btn-danger'>Excluir</a></td>";
                                echo "</tr>";
                                $nbt++;
                            }
                        }
                
                        fclose($arquivoAberto);
                ?>
            </tbody>
            </table><br>
            <a href="index-add.html" class="btn btn-primary" style="margin-top:20px; margin-left: 50%; transform: translate(-50%);">Adicionar tarefas</a>
            </div>
        </body>
        <div style="margin-bottom: 35px">
            <h4 style="text-align: left; font-size: 20px;">Desenvolvedor: Higor Hicker</h4>
        </div>
    </html>

