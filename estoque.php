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
     if (empty($_POST['titulo'])) {
        $erros[] = 'Campo titulo vazio<br>';
    }
    if (empty($_POST['autor'])) {
        $erros[] = 'Campo autor vazio<br>';
    }
    if (empty($_POST['preco'])) {
        $erros[] = 'Campo preco vazio<br>';
    }
    if (empty($_POST['qntestoque'])) {
        $erros[] = 'Campo Quantidade em Estoque vazio<br>';
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($erros)) {
            $livro = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'preco' => $_POST['preco'],
                'qntEstoque' => $_POST['qntestoque']
            ];

            if(validar_livro($livro)) {
                echo "TITULO VAZIO";
            } else {
                echo "TITULO CERTO";
            }
            
        } else {
            echo "<h2>Erro ao cadastrar livro</h2>";
            foreach ($erros as $erroatual) {
                echo $erroatual;
            }
            require_once('index.php');
        }
    } else {
        echo "VOCÊ NÃO ENVIOU O FORMULÁRIO";
    }
?>
</body>
</html>