<?php

class DAODepartamento{

    public function cadastrar(Departamento $departamento){
        
        $sql = "INSERT INTO departamento VALUES (default, :nome)";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $departamento->getNome());
        $con->execute();

        return "Cadastrado com sucesso";
    }

    public function listaDepartamentos(){
       
        $sql = "SELECT * FROM departamento";  
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        
        $lista = array();
 
        while($departamento = $con->fetch(PDO::FETCH_ASSOC)) {
            $lista[] = $departamento;
        }
 
        return $lista;
 
    }

}
?>
