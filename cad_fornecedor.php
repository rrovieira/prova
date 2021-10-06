<?php
    include("header.php")
?>
	<h2>Cadastro de Fornecedor</h2>
	<form method="GET" action="fornecedor.php">  
     <p><label>Empresa <input type="text" name="empresa" /></label></p>
     <p><label>Nome<input type="text" name="nome" /></label></p>
     <p><label>Tipo <select name="tipo">
                     <option value="PF">Pessoal Física</option>
                     <option value="PJ">Pessoa Jurídica</option>
                   </select>
      </label>
    </p>

   <p><label>CPF/CNPJ <input type="text" name="cnpf_cpf" /></label></p>
   <p><label>Telefone <input type="text" name="telefone" /></label></p>
   <button type="submit">Cadastrar</button>
  </form>
<?php
include("footer.php")
?>