<?php

require_once("config.php");
//carrega um usuario
//$root = new Usuario();

//$root->loadbyId(4);

//echo $root;

//carrega uma lista de usuario

//$lista = Usuario::getList();
//echo json_encode($lista);


//carre uma lista de usuario busgando pelo login

//$search = Usuario::search("V");

//echo json_encode($search);

//carrega usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("jonis.alves","123");
//echo $usuario;


//insere um usuario com o metodo inert
/*
$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("351");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadbyId(6);

$usuario->update("aluno 1", "122345");

echo $usuario;
?>