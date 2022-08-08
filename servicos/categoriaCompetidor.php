<?php


function defineCategoriaCompetidor(string $nome, string $idade){
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecente';
    $categorias[] = 'adulto';

    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12)
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'infantil'){
                    setarMensagemSucesso('O nadador ' . $nome . " compete na categoria infantil");
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18) 
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'adolecente'){
                    setarMensagemSucesso('O nadador ' . $nome . " compete na categoria adolecente");
                    return null;
                }
            }
        }else
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'adulto'){
                    setarMensagemSucesso('O nadador ' . $nome . " compete na categoria adulto");
                    return null;
                }    
            }
        }
    }else
        removerMensagemSucesso();
        return obterMensagemErro();
}