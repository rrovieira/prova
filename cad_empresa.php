
  <?php
    include("header.php")
  ?>
  <div id="formulario">
	<h2>Cadastro de Empresa</h2>
	<form method="GET" action="cadastrar.php">  
     <p><label>Nome <input type="text" name="nome" /></label></p>
     <p><label>CNPJ <input type="text" name="cnpj" /></label></p>
     <p><label>Endereço <input type="text" name="endereco" /></label></p>
     <p><label>Cidade <input type="text" name="cidade" /></label></p>
     <p><label>UF <select name="estado">
                     <option value="AC">Acre</option>
                     <option value="AL">Alagoas</option>
                     <option value="AP">Amapá</option>
                     <option value="AM">Amazonas</option>
                     <option value="BA">Bahia</option>
                     <option value="CE">Ceará</option>
                     <option value="DF">Distrito Federal</option>
                     <option value="ES">Espírito Santo</option>
                     <option value="GO">Goiás</option>
                     <option value="MA">Maranhão</option>
                     <option value="MT">Mato Grosso</option>
                     <option value="MS">Mato Grosso do Sul</option>
                     <option value="MG">Minas Gerais</option>
                     <option value="PA">Pará</option>
                     <option value="PB">Paraíba</option>
                     <option value="PR">Paraná</option>
                     <option value="PB">Pernambuco</option>
                     <option value="PI">Piauí</option>
                     <option value="RJ">Rio de Janeiro</option>
                     <option value="RN">Rio Grande do Norte</option>
                     <option value="RS">Rio Grande do Sul</option>      
                     <option value="RO">Rondônia</option>
                     <option value="RR">Roraima</option>
                     <option value="SC">Santa Catarina</option>
                     <option value="SP">São Paulo</option>      
                     <option value="SE">Sergipe</option>
                     <option value="TO">Tocantins</option>       
                  </select>
      </label></p>
      <button type="submit">Cadastrar</button>
      <?php
      
      ?>
  </form>
</div>
<?php
    include("footer.php")
?>