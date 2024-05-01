<?php
//inicializa as sessoes
session_start();
//classes

include_once '../Model/Users.php';
include_once '../Model/UsersDAO.php';

// instancia os objetos
$user = new Users ();
$userDAO = new UsersDAO ();

//pegar os valores dos campos 
$mail       = filter_input(INPUT_POST, "mail");
$password   = filter_input(INPUT_POST, "pass");

//passa os valores para os atributos
$user->setMail($mail);
$user->setPassword($password);


//verifica se o método logar retorna true 
if($userDAO->logar($user)) {
    echo "o usuario foi autenticado com sucesso!";
} else {
    echo "Erro na autenticação do usuário";

}