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
        $cod = $_GET ['cod'];
        require 'classes/Cliente.php';
        $cli = new Cliente();
        $clientes = $cli->buscar($cod);
        ?>
        <h2>Editar Cliente</h2>
        <form action="editar.php?cod=<?php echo $cod; ?>" method="post">
            <label for="nomcli">Nome</label>
            <input id="nomcli" value="<?php echo $clientes ['nomcli'] ?>" name="nomcli" type="text" maxlength="60">
            <br/><br/>
            <label for="endcli">Endereço</label>
            <input id="endcli" value="<?php echo $clientes ['endcli'] ?>" name="endcli" type="text" maxlength="120">
            <br/><br/>
            <label for="telcli">Telefone</label>
            <input id="telcli" value="<?php echo $clientes ['telcli'] ?>" name="telcli" type="text" maxlength="15">
            <br/><br/>

            <button type="submit" onclick="<?php
            if (isset($_POST ['nomcli'])) {
                $cli->editar($cod, $_POST ['nomcli'], $_POST ['endcli'], $_POST ['telcli']);
                header('Location:index.php');
            }
            ?>">Editar</button>          
        </form>
    </body>
</html>