<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $password = '';

    try {
        $conexao = new PDO($dsn, $usuario, $password);

        $query = '
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';

        $retorno = $conexao->exec($query);

        echo $retorno;

        /* INSERT
        $query = '
            insert into tb_usuarios(
                nome,
                email, 
                senha
            ) values(
                "Gustavo",
                "gustavo.lealtec@gmail.com",
                "123456"
            ) 
        ';
        */
        // DELETE
        $query = '
            delete from tb_usuarios
        ';        

        $retorno = $conexao->exec($query);
        echo $retorno;

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
    }
