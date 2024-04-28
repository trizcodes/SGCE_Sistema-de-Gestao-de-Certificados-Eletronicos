<?php 

include_once '../Model/Users.php';
include_once '../Model/UsersDAO.php';

$user = new Users();
$userDAO = new UsersDAO();



$id = filter_input(INPUT_GET, "id");

$user->setId($id);

if($userDAO->delUser($user)) {
    echo "<script> alert('Usuário excluído com sucesso!'); location='../View/listusers.php'</script>";
}