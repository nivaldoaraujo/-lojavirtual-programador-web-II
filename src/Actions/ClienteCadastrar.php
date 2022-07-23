<?php
namespace LOJA\Actions;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class ClienteCadastrar{

    function __construct(){
        
        if($_POST){
            try{
                $obj = new Cliente();
                $obj->setNome($_POST['nome']);
                $obj->setTelefone($_POST['telefone']);
                $obj->setEmail($_POST['email']);
                $obj->setCpf($_POST['cpf']);
                
                $DAO = new DAOCliente();
                $msg = $DAO->cadastrar($obj);
                echo $msg;
            }catch(\Exception $e){
                $msg = $e->getMessage();
                echo $e->getMessage();
            }
        }
    }
}
