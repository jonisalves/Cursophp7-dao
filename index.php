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
$usuario = new Usuario();
$usuario->login("jonis.alves","123");
echo $usuario;

?>