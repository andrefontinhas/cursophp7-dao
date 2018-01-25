<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios.... chama função estática
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$busca = Usuario::search("j");
//echo json_encode($busca)

//Carrega um usuario usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;

//Executa procedure para inserir dados... criando novo aluno
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterando registro do banco
/*
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("professor","!@#$%");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


 ?>