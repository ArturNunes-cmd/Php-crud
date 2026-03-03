<h1>Listar pizza</h1>
<?php 
    $sql = "SELECT * FROM pizza";
    
    $res = $conn->query($sql);
    
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s) </p>";
    
    if($qtd > 0) {
        print "<table class= 'table table-bordered table-striped table-hover'>";
        print "<tr>"; 
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Borda</th>";
        print "<th>Preço</th>";
        print "<th>Ações</th>";
        print "</tr>";
        
        while ($row = $res->fetch_object() ){
            print"<tr>";
            print"<td>".$row->id_pizza."</td>";
            print"<td>".$row->nome_pizza."</td>";
            print"<td>".$row->borda_pizza."</td>";
            print"<td>".$row->preco_pizza."</td>";
            print "<td>
                <button class='btn btn-primary'onclick=\"location.href='?page=editar-pizza&id_pizza=".$row->id_pizza."'\">Editar</button>

                <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar-pizza&acao=excluir&id_pizza=".$row->id_pizza."'; }\">Excluir</button>
            </td>";
            print "</tr>";
        } 
        print"</table>";
    } else{
        print "<p>Não encontrou resultados</p>";
    }
?>
