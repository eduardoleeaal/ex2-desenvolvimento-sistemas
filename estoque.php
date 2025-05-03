<?php require_once('validacoes.php'); ?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    
<?php
    if (validar_formulario_post($_SERVER)) {
        echo '<h2>VOCÊ NÃO ENVIOU O FORMULÁRIO<h2>';
        echo '<a href="index.php">Voltar ao início</a>';
        exit;
    } 

    $livro = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'preco' => $_POST['preco'],
        'qntEstoque' => $_POST['qntestoque']
    ];   
    
    if(!validar_livro($livro)){
        echo '<h3>Erro!</h3>';
        echo '<a href="index.php">Voltar ao início</a>';
        exit;
    } else {
        $valorTotal = calcularValorTotalEstoque($livro);
        echo "<h2>Dados do Livro:</h2>";
        foreach ($livro as $chave => $valor) {
            echo "<br>". ucfirst($chave) . ": " . "$valor";
        }
        echo "<br>Valor total do estoque: R$" . $valorTotal;
    }
  
?>
</body>
</html>