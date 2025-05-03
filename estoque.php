<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    
<?php
     if (empty($_POST['nomeApa'])) {
        $erros[] = 'Campo nome do aparelho vazio<br>';
    }
    if (empty($_POST['consumoWatts'])) {
        $erros[] = 'Campo consumo máximo em watts vazio<br>';
    }
    if (empty($_POST['horasLigado'])) {
        $erros[] = 'Campo número de horas ligado por dia vazio<br>';
    }
    if (empty($_POST['diasLigado'])) {
        $erros[] = 'Campo número de dias ligado ao mês vazio<br>';
    }
    if (empty($_POST['valorKWatt'])) {
        $erros[] = 'Campo valor do kW/h vazio<br>';
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($erros)) {
            
        }
    }
?>
</body>
</html>