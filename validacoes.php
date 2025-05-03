<?php 

    function validar_formulario_post(){
        return $_SERVER['REQUEST_METHOD'] != 'POST';
    }

    function validar_livro($livro) {
        if (empty($livro['titulo']) || empty($livro['autor']) || empty($livro['preco']) || empty($livro['qntEstoque'])) {
            return false;
        } else {
            if (!is_numeric($livro['preco']) || $livro['preco'] < 0.01) {
                return false;
            }
            if (!is_numeric($livro['qntEstoque']) || $livro['qntEstoque'] < 1) {
                return false;
            }
        }
        return true;
    }

    function calcularValorTotalEstoque($livro) {
        return $livro['preco'] * $livro['qntEstoque'];
    }

?>