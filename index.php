<?php

	require_once("config.php");
	// carrega um usuario:
	//$root = new Usuario();
	//$root->loadById(3);
	//echo $root;

	// carrega uma lista de usuários:
	//$lista = Usuario::getList(); 
	//echo json_encode($lista);

	// carrega uma lista de usuarios buscando pelo login:
	//$search = Usuario::search("Jo");
	//echo json_encode($search);


	//carrega um usuario usando o login e a senha

	//$usuario = new Usuario();
	//$usuario->login("Jose", "vasco");

	//echo $usuario;


	/*Insert de um usuário novo
	$aluno = new Usuario ("Aluno","@lun0");
	$aluno->insert();
	echo $aluno;
	*/

	/* Alterar um usuário
	$usuario = new Usuario();
	$usuario->loadById(12);
	$usuario->update("professor", "pr0f3ss04");

	echo $usuario;
	*/

	$usuario = new Usuario();
	$usuario->loadById(12);
	$usuario->delete();
	echo $usuario;
?>