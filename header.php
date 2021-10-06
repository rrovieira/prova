<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro de Empresa, Fornecedor e Produtos</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="form">
  <?php
    include("conexao.php");
  ?>
  <nav id="menu">
  <ul>
    <li><a href="cad_empresa.php">Cadastro de Empresa</a></li>
    <li><a href="cad_fornecedor.php">Cadastro de Fornecedor</a></li>
    <li><a href="cad_produto.php">Cadastro de Produtos</a></li>
  </ul>
</nav>
