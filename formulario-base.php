 <table class="table">
		

    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    
    <tr>
        <td>Nome: </td>
        <td><input type="text" class="form-control" name="nome" value="<?=$cliente['nome']?>"></td>
    </tr>

    <tr>
        <td>Endereço:</td>
        <td><input type="text" class="form-control" name="endereco" value="<?=$cliente['endereco']?>">
    </td>
    </tr>

    <tr>
        <td>Telefone:</td>
    <td>
        <input type="text" class="form-control" name="telefone" value="<?=$cliente['telefone']?>">
    </td>
    </tr>

    <tr>
        <td>CPF/CNPJ:</td>
    <td>
        <input type="text" class="form-control" name="cpf" value="<?=$cliente['cpf']?>">
    </td>
    </tr>



    <tr>
        <td>E-mail:</td>
    <td>
        <input type="text" class="form-control" name="email" value="<?=$cliente['email']?>">
    </td>
    </tr>



    <tr>
        <td>Ativo:</td>
        <td>
        <select name="ativo">
            <option value="1">SIM </option>
            <option value="2">NÃO </option>


        </select>
        </td>
        <td><input type="submit" value="Enviar"></td>
        
        </tr>
    
    </table>