<?php

    print_r($_POST);

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $password = '';
    
        try {
            $conexao = new PDO($dsn, $usuario, $password);

            $query = "select * from tb_usuarios where ";
            $query .= " email = '{$_POST['usuario']}' ";
            $query .= " AND senha = '{$_POST['senha']}' ";

            echo $query;

            // $stmt = $conexao->query($query);
            // $usuario = $stmt->fetch();
            echo '<hr >';

            echo '<pre>';
                //print_r($usuario);
            echo '</pre>';
    
        } catch(PDOException $e) {
            echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="usuario" name="usuario"/>
            <br>
            <input type="password" placeholder="senha" name="senha"/>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>