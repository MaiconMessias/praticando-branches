<?php
    include "servicos/mensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="POST">
    <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso))
            echo $mensagemDeSucesso;

        $mensagemDeErro = obterMensagemErro();
        if (!empty($mensagemDeErro))
            echo $mensagemDeErro;
    ?>
    <p>Seu Nome: <input type="text" name="nome" /> </p>
    <p>Sua Idade: <input type="text" name="idade" /> </p>
    <p><input type="submit" value="Enviar dados do competidor" /> </p>
</form>    

</body>
</html>