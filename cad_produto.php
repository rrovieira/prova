<?php
    include("header.php")
?>
	<h2>Cadastro de Produto</h2>
	<form method="post" action="produto.php">  
     <p><label>Nome <input type="text" name="nome" /></label></p>
     <p><label>Valor <input type="text" name="valor" /></label></p>
     <p><label>Qtde <input type="text" name="qtde" /></label></p>
     <p><label>Categoria <input type="text" name="categoria" /></label></p>
     <button type="submit" >Cadastrar</button>
  </form>
<?php
    include("footer.php")
?>