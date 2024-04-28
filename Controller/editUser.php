<?php

//classes

include_once '../Model/Users.php';
include_once '../Model/UsersDAO.php';

// instancia os objetos
$user = new Users ();
$userDAO = new UsersDAO ();

//pegar valores nos campos e atribuir

$name          = filter_input(INPUT_POST, "name");
$mail          = filter_input(INPUT_POST, "mail");
$password      = filter_input(INPUT_POST, "pass");
$status        = filter_input(INPUT_POST, "status");
$id        = filter_input(INPUT_POST, "id");

//pegando os valores e passando para os atributos do objeto
$user->setName($name);
$user->setMail($mail);
$user->setPassword($password);
$user->setStatus($status);
$user->setId($id);

//verifica se o metodo editUser está retornando true
if ($userDAO-> editUser($user)) {
    echo "<script> alert('Usuário editado com sucesso!'); location='../View/formEdit.php'</script>";
}