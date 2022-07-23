<?php
include "includes/autoload.php";
use LOJA\Actions\ClienteCadastrar;

    // capturando os dados da url
    // Ex.: admin/departamento/cadastrar/listar
    // model=departamento & action=listar
    $router = $_GET['model'].$_GET['action'];
    // $router = departamentolistar

    $view = "";

    switch($router){

        case 'clientecadastrar':
            new ClienteCadastrar();
            $view = "form-cliente.php";
            break;

        case 'departamentocadastrar':
            include "actions/cadastrar-departamento.php";
            $view = "form-departamento.php";
            break;

        case 'departamentolistar':
            include "actions/listar-departamento.php";
            $view = "lista-departamento.php";
            break;
        
        // admin/cliente/listar
        case 'clientelistar';
            include "actions/listar-clientes.php";
            $view = "lista-cliente.php";
            break;

        // admin/cliente/visualizar/:id
        case 'clientevisualizar';
            include "actions/cliente-buscar-id.php";
            $view = "visualiza-cliente-id.php";
            break;

        case 'produtocadastrar';
            include "actions/cadastrar-produto.php";
            include "actions/listar-departamento.php";
            $view = "form-produto.php";
            break;

        case 'usuariocadastrar';
            include "actions/cadastrar-usuarios.php";
            $view = "form-usuario.php";
            break;    

        case 'usuariolistar';
            include "actions/listar-usuarios.php";
            $view = "lista-usuario.php";
            break;

        case 'usuariovisualizar';
            include "actions/usuario-buscar-id.php";
            $view = "visualiza-usuario-id.php";
            break;

        // 0. verificar se existe a classe (produto.class.php)
        // 1. criar a view/lista-produto.php
        // 2. criar a actions/produto-listar.php
        // 3. Verificar se em produto.dao possui a função de listar
        
        case 'produtolistar';
            include "actions/produto-listar.php";
            $view = "lista-produto.php";
            break; 

        default:
            echo "default";
        break; 
    }

    include "view/header.php";
    include "view/{$view}";
    include "view/mensagem.php";
    include "view/footer.php";
?>

