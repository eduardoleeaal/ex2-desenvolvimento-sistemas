<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            margin-top: 5px;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <form action="estoque.php" method="post">
        <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título" >
        
        <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" placeholder="Autor"  >

        <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" step="0.01" placeholder="Preço Unitário">

        <label for="qntestoque">Quantidade em Estoque</label>
            <input type="number" name="qntestoque" id="qntestoque" step="1" placeholder="Quantidade em estoque" >

        <button type="submit">Enviar</button>
    </form>

</body>

</html>