<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $password = '';

    try {
        $conexao = new PDO($dsn, $usuario, $password);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(); // fetchAll contem um array com todas as informações da query

        echo '<pre>';
            print_r($lista); // mostra todo o retorno do fetchAll
        echo '</pre>';

        echo $lista[0][2];

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
    }



    // $query = '
    //         create table if not exists tb_usuarios(
    //             id int not null primary key auto_increment,
    //             nome varchar(50) not null,
    //             email varchar(100) not null,
    //             senha varchar(32) not null
    //         )
    //     ';

    //     $retorno = $conexao->exec($query);

    //     echo $retorno;

        // INSERT
        // $query = '
        //     insert into tb_usuarios(
        //         nome,
        //         email, 
        //         senha
        //     ) values(
        //         "Gustavo",
        //         "gustavo.lealtec@gmail.com",
        //         "123456"
        //     ) 
        // ';

        // DELETE
        // $query = '
        //     delete from tb_usuarios
        // ';

        // $query = '
        //     insert into tb_usuarios(
        //         nome,
        //         email, 
        //         senha
        //     ) values(
        //         "Gustavo Keller",
        //         "gustavo.lealtec@gmail.com",
        //         "123456"
        //     ) 
        // ';
        // $retorno = $conexao->exec($query);

        // $query = '
        //     insert into tb_usuarios(
        //         nome,
        //         email, 
        //         senha
        //     ) values(
        //         "Dyhenifer Keller",
        //         "dyheni123@gmail.com",
        //         "123456"
        //     ) 
        // ';
        // $retorno = $conexao->exec($query);

        // $query = '
        //     insert into tb_usuarios(
        //         nome,
        //         email, 
        //         senha
        //     ) values(
        //         "Junior Keller",
        //         "juniorkeller@gmail.com",
        //         "123456"
        //     ) 
        // ';

        // $retorno = $conexao->exec($query);
        // echo $retorno;