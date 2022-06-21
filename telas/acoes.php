<?php 
function login(){
  include 'telas/login.php'; 
}

function cadastro() {
  if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $arquivo = fopen('dados/contatos.csv', 'a+');

    fwrite($arquivo, "{$nome}; {$email}; {$telefone}".PHP_EOL);
    fclose($arquivo);

	$mensagem = 'Pronto, cadastro realizado';
    
	include 'telas/mensagem.php';
  }

  include 'telas/cadastro.php';
}

function excluir() {
  $id = $_GET['id'];

  $contatos = file('dados/contatos.csv');
	
  unset($contatos[$id]);

  unlink('dados/contatos.csv');

  $arquivo = fopen('dados/contatos', 'a+');
  
  foreach ($contatos as $cadaContato) {
    fwrite($arquivo, $cadaContato);
  }

  $mensagem = 'Pronto, contato excluído';
  include 'telas/mensagem.php';
}

function editar() {
  $id = $_GET['id'];
  if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $contatos[$id] = fopen('dados/contatos.csv', 'a+');

    foreach($contatos as $cadaContato) {
      fwrite($arquivo, $cadaContato);
    }

    fclose($arquivo);

    $mensagem = 'Pronto, contato atualizado';
    include 'telas/mensagem.php';
  }
  
  $contatos = file('dados/contatos.csv');

  

  $dados = $contatos[$id];

  var_dump($dados);

  include 'telas/editar.php';
}


function home(){
  include 'telas/home.php'; 
}

function admin(){
  include 'telas/admin.php'; 
}
function listar(){
  $contatos = file('dados/contatos.csv');
  
  include 'telas/listar.php'; 
}
function erro404(){
  include 'telas/404.php'; 
}
function relatorio(){
  include 'telas/relatorio.php';
}

?>