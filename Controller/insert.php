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
$status        = "N";

//pegando os valores e passando para os atributos do objeto
$user->setName($name);
$user->setMail($mail);
$user->setPassword($password);
$user->setStatus($status);

//verifica se o metodo addUser está retornando true
if ($userDAO-> addUser($user)) {
    echo "<script> alert('Usuario cadastrado com sucesso!'); location='../View/index.php'</script>";
}

var_dump($userDAO, $user);