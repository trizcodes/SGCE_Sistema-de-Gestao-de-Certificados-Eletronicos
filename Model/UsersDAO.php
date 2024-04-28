<?php 
//incluir a classe
include_once "Connect.php";

//declarando a classe-filha da connect
class UsersDAO extends Connect {
    //atributo
    private $entity = "users";

    //método que insere um registro na tabela
    public function addUser(Users $u) {
        //instrução SQL
        $query = "INSERT INTO {$this-> entity} (name, mail, password, status) VALUES(?, ?, ?, ?)";
        //armazena a instrução que será executada no servidor
        $stmt = UsersDAO::prepareSQL($query);
        //pega os valores que foram passsados pelo métodos setters
        $stmt-> bindValue(1, $u -> getName());
        $stmt-> bindValue(2, $u -> getMail());
        $stmt-> bindValue(3, $u -> getPassword());
        $stmt-> bindValue(4, $u -> getStatus());
        //executa a instrução
        return $stmt -> execute();
    }

    //método que edita um registro na tabela do usuário
    public function editUser(Users $u) { 
        $query = " UPDATE {$this-> entity} SET name=?, mail=?, password=?, status=? WHERE id=?";
        $stmt = UsersDAO::prepareSQL($query);
       
        $stmt-> bindValue(1, $u -> getName());
        $stmt-> bindValue(2, $u -> getMail());
        $stmt-> bindValue(3, $u -> getPassword());
        $stmt-> bindValue(4, $u -> getStatus());
        $stmt-> bindValue(5, $u -> getId());
        return $stmt -> execute();

    }

    //método que deleta um reigstro da tabela
    public function delUser(Users $u) {
        $query = "DELETE FROM {$this-> entity} WHERE id=?";
        $stmt = UsersDAO::prepareSQL($query);
        $stmt-> bindValue(1, $u -> getId());
        return $stmt -> execute();
        
    }

    //método que seleciona um registro da tabela
    public function selectById(Users $u) {
        $query = "SELECT * FROM {$this-> entity} WHERE id=?";
        $stmt = UsersDAO::prepareSQL($query);
        $stmt-> bindValue(1, $u -> getId());
        $stmt -> execute();
        return $stmt->fetch(PDO::FETCH_OBJ);

    }

    //método que seleciona todos os registros
    public function select() {
        $query = "SELECT * FROM {$this-> entity}";
        $stmt = UsersDAO::prepareSQL($query);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }


}


