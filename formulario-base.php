  <input type="hidden" name="id" value="<?=$pdf['id']?>"/>   
	
 <?php $pdf = array("nome" =>" ", "arquivo" =>" ","vencimento" =>" ", "ativo" =>"1"); ?>
	<tr>
		<td>Nome: </td>
		<td><input type="text" class="form-control" name ="nome" value="<?=$pdf['nome']?>"></td>
	</tr>	
	
      <tr>
		<td>arquivo:</td>
		<td><input type="file" class="form-control" name="arquivo" value="<?=$pdf['arquivo']?>"></td>
	</tr>	
           
           
    <tr>
                <td>Vencimento:</td>
                <td>
                    <input type="date" class="form-control" name="vencimento" value="<?=$pdf['dataCad']?>">
                </td>
            </tr>

            <tr>


                <td>Ativo:</td>
                <td><select name="ativo">
                <option value="1">SIM </option>
                <option value="2">NÃO </option>
             
             
            </select></td>
            </tr>