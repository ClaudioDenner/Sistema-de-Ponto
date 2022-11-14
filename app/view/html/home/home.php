
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ponto</title>
    <link rel="stylesheet" href="app/view/css/home/style.css">
    
</head>
<body>
    <h1>Sistema de Ponto</h1>
    <h2>By:ClaudioDenner</h2>
    <form method="POST" class="cronometro" action="InsertHour.php">
        <input type="hidden" name="data" id="dataHidden">
        <input type="hidden" name="hora" id="horaHidden">
        <div class="cronometro">
            <div id="hora" class="hora"></div>
            <div id="data" class="data"></div>
            
        </div>
        <input type="submit" value="Registrar Ponto!" onclick="inputHidden()">
    </form>
    <div class="options">

        <?php
        foreach($consultRegistersDay as $i){
            if($i['entrada1'] != '')
            echo "<div class='marcacoes'>1 - Entrada: ".$i['entrada1']."</div>";
            echo "<div class='marcacoes'>2 - Pausa: ".$i['saida1']."</div>";
            echo "<div class='marcacoes'>3 - Retorno: ".$i['entrada2']."</div>";
            echo "<div class='marcacoes'>4 - Encerramento: ".$i['saida2']."</div>";

        }
        
        ?>
    </div>


    <script src="app/view/js/home/cronometro.js"></script>
    <script src="app/view/js/home/inputHidden.js."></script>
    
    
</body>
</html>