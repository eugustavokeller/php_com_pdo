<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $password = '';

    try {
        $conexao = new PDO($dsn, $usuario, $password);

        $query = '
            select * from tb_usuarios
        ';

        foreach($conexao->query($query) as $key => $value) {
            print_r($value['nome']);
            echo '<hr>';
        }

        // $stmt = $conexao->query($query);
        // $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
        //$lista = $stmt->fetchAll(); // fetchAll(recupera todos) -> contem um array com todas as informações da query
        //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC) ***Define que quer array associativo***
        //$lista = $stmt->fetchAll(PDO::FETCH_NUM) ***Define que quer array numerico*** 
        //$lista = $stmt->fetchAll(PDO::FETCH_BOTH) ***Define que quer array com ambos (padrao)*** 
        //$lista = $stmt->fetchAll(PDO::FETCH_OBJ) ***Define que quer array com objetos e não array de array *** 

        // echo '<pre>';
        //     print_r($lista); // mostra todo o retorno do fetchAll
        // echo '</pre>';

        // foreach($lista as $key => $value) {
        //     print_r($value->id);
        //     echo '<hr>';
        // }

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