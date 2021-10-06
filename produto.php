<?php

$nome = $_GET['nome'];
$valor = $_GET['valor'];
$qtde = $_GET['qtde'];
$categoria = $_GET['categoria'];

$local='localhost';
$usuario='admin';
$senha='123456';
$banco='prova';

$conexao = mysqli_connect($local,$usuario,$senha,$banco);
if (!$conexao) {
      die("Não foi possível conectar ao banco MySQL.: " . mysqli_connect_error());
}
 

$sql = "INSERT INTO produto (nome, valor, qtde, categoria) VALUES ('$nome', '$valor', '$qtde', '$categoria')";
if (mysqli_query($conexao, $sql)) {
      echo "Produto criado com sucesso!";
} else {
      echo "Produto já Cadastrado!<br>";
}
mysqli_close($conexao);


?>