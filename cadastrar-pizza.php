<h1 style="font-size: 40px">Cadastrar pizza</h1>
<form action="?page=salvar-pizza" method="POST" class="table">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="linha">
        <label> Nome da pizza</label>
            <select class="caixa" name="nome_pizza">
                <option>- Escolha -</option>
                <option value="Calabresa"> Calabresa </option>
                <option value="Portuguesa"> Portuguesa </option>
                <option value="Tomate seco"> Tomate seco </option>
                <option value="Quatro queijos"> Quatro queijos </option>
                <option value="Banana"> Banana </option>
                <option value="Frango com Catupiry"> Frango com Catupiry </option>
                <option value="Margherita"> Margherita </option>
                <option value="Chocolate"> Chocolate </option>
            </select>
    </div>
    
    <div class="linha">
        <label > Borda </label>
            <select class="caixa" name="borda_pizza">
                <option>- Escolha -</option>
                <option value="Normal"> Normal </option>
                <option value="Queijo"> Queijo </option>
                <option value="Chocolate"> Chocolate </option>
                <option value="Gergelim/Ervas"> Gergelim/Ervas </option>
            </select>
    </div>
 
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>