<?php 
//incluir a classe
include_once "./Connect.php";

//declarando a classe-filha da connect
class UsersDAO extends Connect {
    //atributo
    private $entity = "users";

    //método que insere um registro na tabela
    public function addUser() {

    }

    //método que edita um registro na tabela do usuário
    public function editUser(Users $u) {

    }

    //método que deleta um reigstro da tabela
    public function delUser(Users $u)  {
        
    }

    //método que seleciona um registro da tabela
    public function selectById(Users $u) {

    }

    //método que seleciona todos os registros
    public function select() {

    }


}


