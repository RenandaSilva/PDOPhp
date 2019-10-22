<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'classes/Cliente.php';
        $cli = new Cliente();
        $clientes = $cli->listar();
        $excluir = $_GET ['excluir'];
        
        if(isset($excluir)){
            header('Location:index.php');
            $cli->excluir($excluir);
            unset($excluir);
        }
        
        ?>
        <a href='adicionar.php'>Novo Cliente</a>
        <table>
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>
                </tr> 
            </thead>
            <tbody>
                <?php foreach ($clientes as $c) { ?>
                    <tr>
                        <td><?php echo $c ['codcli']; ?></td>
                        <td><?php echo $c ['nomcli']; ?></td>
                        <td><?php echo $c ['endcli']; ?></td>
                        <td><?php echo $c ['telcli']; ?></td>
                        <td>
                            <a href="editar.php?cod=<?php echo $c ['codcli'] ?>"><button type="button">Editar</button></a>
                            
                            <a href="index.php?excluir=<?php echo $c ['codcli'] ?>"><button type="button">Excluir</button></a>
                        </td>
                    </tr>  
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
