<h1>Cadastrar venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control" required>
            <option value="">- Escolha o Cliente -</option>
            <?php
                $sql_cliente = "SELECT id_cliente, nome_cliente, endereco_cliente FROM cliente ORDER BY nome_cliente";
                $res_cliente = $conn->query($sql_cliente);
                if($res_cliente->num_rows > 0){
                    while($row_cliente = $res_cliente->fetch_object()){
                        print "<option value='{$row_cliente->id_cliente}'>{$row_cliente->nome_cliente} </option>";
                    }
                } else {
                    print "<option>Não há clientes cadastrados</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
    <label>Pizza</label>
    <select name="pizza_id_pizza" class="form-control" required>
        <option value="">- Escolha a pizza -</option>
        <?php
            $sql_pizza = "SELECT id_pizza, nome_pizza, borda_pizza, preco_pizza 
                          FROM pizza ORDER BY nome_pizza";
            $res_pizza = $conn->query($sql_pizza);

            if($res_pizza->num_rows > 0){
                while($row_pizza = $res_pizza->fetch_object()){
                    print "<option value='{$row_pizza->id_pizza}'>
                              {$row_pizza->nome_pizza} - {$row_pizza->borda_pizza} - (R$ {$row_pizza->preco_pizza})
                           </option>";
                }
            } else {
                print "<option>Não há pizzas cadastradas</option>";
            }
        ?>
    </select>
</div>

    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data_venda" class="form-control" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Registrar Venda</button>
    </div>
</form>
    