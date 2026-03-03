<h1>Editar Cliente</h1>
<?php 
    $sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
    
    <div class="mb-3">
        <label>Nome do cliente</label>
        <input type="text" name="nome_cliente" value="<?php print $row->nome_cliente; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail do cliente</label>
        <input type="email" name="email_cliente" value="<?php print $row->email_cliente; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone do cliente</label>
        <input type="text" name="telefone_cliente" value="<?php print $row->telefone_cliente; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Endereço do cliente</label>
        <input type="text" name="endereco_cliente" value="<?php print $row->endereco_cliente; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>