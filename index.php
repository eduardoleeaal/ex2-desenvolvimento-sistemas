<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>

    <form action="estoque.php" method="post">
        <label for="titulo">
            <input type="text" name="titulo" id="titulo" placeholder="Título">
        </label>

        <label for="autor">
            <input type="text" name="autor" id="autor" placeholder="Autor">
        </label>

        <label for="preco">
            <input type="number" name="preco" id="preco" step="0.01" min="0.01" placeholder="Preço Unitário">
        </label>

        <label for="qntestoque">
            <input type="number" name="qntestoque" id="qntestoque" step="1" min="1" placeholder="Quantidade em estoque">
        </label>
    </form>

</body>
</html>