<?php
$empresa = $_GET['empresa'];
$nome = $_GET['nome'];
$cnpf_cpf = $_GET['cnpf_cpf'];
$tipo = $_GET['tipo'];
$telefone = $_GET['telefone'];


$local='localhost';
$usuario='admin';
$senha='123456';
$banco='prova';

$conexao = mysqli_connect($local,$usuario,$senha,$banco);
if (!$conexao) {
      die("Não foi possível conectar ao banco MySQL.: " . mysqli_connect_error());
}
$sql = "INSERT INTO `fornecedor`(`cnpj_cpf`, `empresa`, `nome`, `tipo`, `data_hora_cad`, `telefone`) VALUES ('$cnpf_cpf', '$empresa', '$nome','$tipo', 'now()', '$telefone')";

if (mysqli_query($conexao, $sql)) {
      echo "Fornecedor criado com sucesso!";
} else {
      echo "Fornecedor já Cadastrado!<br>";
}
mysqli_close($conexao);
?>