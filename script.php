<?php
include "servicos/validacao.php";
include "servicos/categoriaCompetidor.php";
include "servicos/mensagemSessao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*print_r($categorias);
var_dump($nome);
var_dump($idade);
*/
defineCategoriaCompetidor($nome, $idade);
header('location: index.php');