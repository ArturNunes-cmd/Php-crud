<h1>Listar Vendas</h1>
<?php 

$sql = "SELECT 
        v.id_venda, 
        v.data_venda, 
        c.nome_cliente AS nome_cliente,
        c.endereco_cliente AS endereco_cliente,
        p.nome_pizza AS nome_pizza, 
        p.borda_pizza AS borda_pizza,
        p.preco_pizza AS preco_pizza
    FROM venda AS v
    INNER JOIN cliente AS c 
        ON v.cliente_id_cliente = c.id_cliente
    INNER JOIN pizza AS p 
        ON v.pizza_id_pizza = p.id_pizza";

$res = $conn->query($sql);
$qtd = $res->num_rows;

print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

if($qtd > 0){
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>
            <th>#</th>
            <th>Endereço</th>
            <th>Cliente</th>
            <th>Pizza</th>
            <th>Borda</th>
            <th>Preço</th>
            <th>Data da Venda</th>
            <th>Ações</th>
           </tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>$row->id_venda</td>";
        print "<td>$row->endereco_cliente</td>";
        print "<td>$row->nome_cliente</td>";
        print "<td>$row->nome_pizza</td>";
        print "<td>$row->borda_pizza</td>";
        print "<td>$row->preco_pizza</td>";
        print "<td>$row->data_venda</td>";
            print "<td>
                <button class='btn btn-primary'onclick=\"location.href='?page=editar-venda&id_venda=".$row->id_venda."'\">Editar</button>

                <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar-venda&acao=excluir&id_venda=".$row->id_venda."'; }\">Excluir</button>
            </td>";
            print "</tr>";
        } 
        print"</table>";
    } else{
        print "<p>Não encontrou resultados</p>";
    }
?>