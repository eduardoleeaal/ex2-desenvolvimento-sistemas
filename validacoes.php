<?php 

    function validar_livro($livro) {
        if (empty($livro['titulo']) || empty($livro['autor'])) {
            return true;
        } else {
            return false;
        }
    }

?>