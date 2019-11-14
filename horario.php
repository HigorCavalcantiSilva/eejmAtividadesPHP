<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index1.css">
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
        <style>
            *{font-family: Helvetica}
        </style>
        <title>Horário</title>
    </head>
    <body>

        <h1 style="text-align: center; margin-top: 8px"><b style="font-size: 32px;">Horário das Aulas</b></h1>

        <table>
            <thead>
                <th style="text-align: center">SEGUNDA-FEIRA</th>
                <th style="text-align: center">TERÇA-FEIRA</th>
                <th style="text-align: center">QUARTA-FEIRA</th>
                <th style="text-align: center">QUINTA-FEIRA</th>
                <th style="text-align: center">SEXTA-FEIRA</th>
            </thead>
            <tbody>
                <?php
                    $materias = Array(Array('Arte', 'Órion'), Array('Biologia', 'Laíse'), Array('Educação Física', 'Déborah'), Array('Filosofia', 'Leandro'), Array('Física', 'Angelina'), Array('Geografia', 'Ana Flávia'), Array('História', 'Giocondo'), Array('Inglês', 'Laura'), Array('Língua Portuguesa', 'Nancy'), Array('Matemática', 'Uramar'), Array('Química', 'Delmar'), Array('Sociologia', 'Alexandra'));
                    $final = Array(11,7,5,4,8,5,9,3,8,6,8,10,8,7,1,0,1,4,9,9,4,2,9,6,10);
                    
                    for($i=4;$i<=24;$i+=5){
                        $multi[] = $i;
                    }

                    echo "<tr>";

                    for($c=0;$c < count($final);$c++){
                    echo "<td><b>".$materias[$final[$c]][0]."</b><br><p>".$materias[$final[$c]][1]."</p></td>";
                        if(in_array($c, $multi)){
                            echo "</tr><tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success bt">Voltar</a>
        <div style="margin-bottom: 35px">
            <h4 style="text-align: left; font-size: 20px;">Desenvolvedor: Higor Hicker</h4>
        </div>
    </body>
</html>