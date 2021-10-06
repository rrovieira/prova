<?php
$local='localhost';
$usuario='admin';
$senha='123456';
$banco='prova';
$conexao = mysqli_connect($local,$usuario,$senha,$banco);
if (!$conexao) {
      die("Não foi possível conectar ao banco MySQL.: " . mysqli_connect_error());
}
?>

