<?php

?>

<fieldset id="fie">
  <div align="center">
  <?php

	?>
    <legend></legend>
    <label></label>
	<label></label>
    <table width="41%" border="0" align="center">

      <tr>
        <?php

        require('conect.php');
        
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query('select * from 2aa.2aa_usuario;');
       
		echo "<table border='1px'>";
		echo "<tr><th width='30px' align='center'>Id</th><th width='100px'>Usuário</th><th width='250px'>Senha</th><th width='100px'>Telefone</th><th width='100px'>Imagem</th><tr>";

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
			
			echo "<tr>";
			echo "<td align='center'>". $linha['id']."</td>";
			echo "<td>". $linha['nome']."</td>";
			echo "<td>". $linha['senha']."</td>";
			echo "<td>". $linha['telefone']."</td>";		
			// buscando a na pasta imagem
			if (empty($linha['imagem'])) {
        $imagem = './img/SemImagem.png';
      } else {
        $imagem = './' . $linha['imagem'];
      }
			$id = base64_encode($linha['id']);
			echo "<td align='center'><img src='$imagem' width='50px' heigth='50px'></a>";
			//echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
			
			echo "</tr>";
			
			
        }

        ?>

      </tr>
    </table>
  </div>
</fieldset>

<td>&nbsp;</td>



<form method="post" action="cad_user_upd.php" id="formlogin" name="formlogin">
  <fieldset id="fie">
    <div align="center">
      <legend></legend>
      <label></label>
      <label></label>
      <table width="41%" border="0" align="center">
        <tr>
          <td>&nbsp;</td>
          <td>
            <legend>Alterar Usuário</legend>
          </td>
        </tr>
        <tr>
          <td>
            <div align="right">ID :</div>
          </td>
          <td><input type="text" name="id" id="id" /></td>
        </tr>
        <tr>
          <td>
            <div align="right">NOME :</div>
          </td>
          <td><input type="text" name="nome" id="nome" /></td>
        </tr>
        <tr>
          <td>
            <div align="right">SENHA :</div>
          </td>
          <td><input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <td>
            <div align="right">TELEFONE :</div>
          </td>
          <td><input type="text" name="telefone" id="telefone" /></td>
        </tr>
        <tr>
          <td>
            <div align="right">IMAGEM :</div>
          </td>
          <td><input type="text" name="imagem" id="imagem" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" value="Alterar" /></td>
        </tr>
      </table>
    </div>
  </fieldset>
</form>