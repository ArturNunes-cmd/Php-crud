<h1>Editar pizza</h1>
<?php 
    $sql = "SELECT * FROM pizza WHERE id_pizza=".$_REQUEST["id_pizza"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-pizza" method="POST">

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_pizza" value="<?php echo $row->id_pizza; ?>">

    
    <div class="linha">
        <label style="text-align: center; font-size: 20px; margin-top: 10px;"> Nome da pizza</label>
        <select class="caixa" name="nome_pizza">
            <option value="">- Escolha -</option>
            <option value="Calabresa" <?php if($row->nome_pizza == "Calabresa") echo "selected"; ?>>Calabresa</option>
            <option value="Portuguesa" <?php if($row->nome_pizza == "Portuguesa") echo "selected"; ?>>Portuguesa</option>
            <option value="Tomate seco" <?php if($row->nome_pizza == "Tomate seco") echo "selected"; ?>>Tomate seco</option>
            <option value="Quatro queijos" <?php if($row->nome_pizza == "Quatro queijos") echo "selected"; ?>>Quatro queijos</option>
            <option value="Banana" <?php if($row->nome_pizza == "Banana") echo "selected"; ?>>Banana</option>
            <option value="Frango com Catupiry" <?php if($row->nome_pizza == "Frango com Catupiry") echo "selected"; ?>>Frango com Catupiry</option>
            <option value="Margherita" <?php if($row->nome_pizza == "Margherita") echo "selected"; ?>>Margherita</option>
            <option value="Chocolate" <?php if($row->nome_pizza == "Chocolate") echo "selected"; ?>>Chocolate</option>
        </select>
    </div>

    <div class="linha">
        <label style="text-align: center; font-size: 20px;">Borda</label>
        <select class="caixa" name="borda_pizza">
            <option value="">- Escolha -</option>
            <option value="Normal" <?php if($row->borda_pizza == "Normal") echo "selected"; ?>>Normal</option>
            <option value="Queijo" <?php if($row->borda_pizza == "Queijo") echo "selected"; ?>>Queijo</option>
            <option value="Chocolate" <?php if($row->borda_pizza == "Chocolate") echo "selected"; ?>>Chocolate</option>
            <option value="Gergelim/Ervas" <?php if($row->borda_pizza == "Gergelim/Ervas") echo "selected"; ?>>Gergelim/Ervas</option>
        </select>
    </div>

    <div class="mb-3" style="text-align: center; font-size: 20px;">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>

</form>
