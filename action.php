<?php
    require 'Champ.php';
    //require 'Champion.php';

    //$id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $elemento = $_REQUEST['elemento'];
    $classe = $_REQUEST['classe'];
    
    $champ = new Champ();

    error_log(print_r($_REQUEST['acao'], true));

    switch ($_REQUEST['acao']) {
        case 'list':
            echo '<h3> Champions: </h3>';
            foreach ($champ->list() as $value) {
                echo 'Id: '.$value['id']
                    .'<br>'.'Nome: '.$value['nome']
                    .'<br>'.'Elemento: '.$value['elemento']
                    .'<br>'.'Classe: '.$value['classe'];
            }

            break;
        case 'insert':
            if ($champ->insert($nome, $elemento, $classe)){
                echo 'Campeão inserido com Sucesso! ';
            } else {
                echo 'Ops, algo deu errado :(';
            }

            break;

        case 'update':
            if($champ->update($_REQUEST['id'], $nome, $elemento, $classe)) {
                echo 'Campeão deletado com Sucesso! ';
            } else {
                echo 'Ops, algo deu errado :(';
            }
            
            break;

        case 'delete':
            if($champ->delete($_REQUEST['id'])) {
                echo 'Campeão atualizado com Sucesso! ';
            } else {
                echo 'Ops, algo deu errado :(';
            }
            break;
    }
?>