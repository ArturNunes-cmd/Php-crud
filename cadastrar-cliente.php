<h1 style="font-size: 40px">Cadastrar cliente</h1>
<form action="?page=salvar-cliente" method="POST" class="table">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label > Nome
            <input type="text" name="nome_cliente" class="form-control">
        </label>
    <div class="mb-3">
        <label> Email
            <input type="text" name="email_cliente" class="form-control">
        </label>
     <div class="mb-3">
        <label> Telefone
            <input type="text" name="telefone_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label> Endereço
            <input type="text" name="endereco_cliente" class="form-control">
        </label>
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>