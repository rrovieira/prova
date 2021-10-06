<?php

$nome = $_GET['nome'];
$cnpj = $_GET['cnpj'];
$endereco = $_GET['endereco'];
$cidade = $_GET['cidade'];
$estado = $_GET['estado'];

$local='localhost';
$usuario='admin';
$senha='123456';
$banco='prova';

$conexao = mysqli_connect($local,$usuario,$senha,$banco);
if (!$conexao) {
      die("Não foi possível conectar ao banco MySQL.: " . mysqli_connect_error());
}
 

$sql = "INSERT INTO empresa (cnpj, nome, endereco, cidade, estado) VALUES ('$cnpj', '$nome', '$endereco', '$cidade', '$estado')";
if (mysqli_query($conexao, $sql)) {
      echo "Empresa criado com sucesso!";
} else {
      echo "Empresa já Cadastrado!<br>";
}
mysqli_close($conexao);


?>