<?php
require_once 'diagrama.php';

$usuario = new Usuario;

$nome = 'Fulano';
$tel = '9999-0000';
$nivel = 1;

$todos_preenchidos = true;

$usuario->preencherDados($nome, $tel, $nivel);


    if(empty($nome)){
        echo 'Preencha o nome';
        $todos_preenchidos = false;
        
    }
    else if(empty($tel)){
        echo 'Preencha o telefone';
        $todos_preenchidos = false;
        
    }
    else if(empty($nivel)){
        echo 'Preencha o nível';
        $todos_preenchidos = false;
        
    }else{
        $usuario->cadastrar();
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
    }


?>