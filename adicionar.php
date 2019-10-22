<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST ['nomcli'])) {
            require 'classes/Cliente.php';
            $cli = new Cliente();
            $cli->adicionar($_POST ['nomcli'], $_POST ['endcli'], $_POST ['telcli']);

            header('Location:index.php');
        }
        ?>
        <h2> Novo Cliente</h2>
        <form action="adicionar.php" method="post">
            <label for="nomcli">Nome</label>
            <input id="nomcli" name="nomcli" type="text" maxlength="60">
            <br/><br/>
            <label for="endcli">Endereço</label>
            <input id="endcli" name="endcli" type="text" maxlength="120">
            <br/><br/>
            <label for="telcli">Telefone</label>
            <input id="telcli" name="telcli" type="text" maxlength="15">
            <br/><br/>

            <button type="submit">Adicionar</button>           
        </form>
    </body>
</html>
