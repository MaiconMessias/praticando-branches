<?php

    session_start();

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecente';
    $categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*print_r($categorias);
var_dump($nome);
var_dump($idade);
*/

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'A idade deve ser numérica';
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo 'O nadador ' . $nome . " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18) 
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolecente')
            echo 'O nadador ' . $nome . " compete na categoria adolecente";
    }
}else
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
            echo 'O nadador ' . $nome . " compete na categoria adulto";
    }
}