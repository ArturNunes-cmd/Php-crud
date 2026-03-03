<h1>Listar cliente</h1>
<?php 

    $sql = "SELECT * FROM cliente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s) </p>";
    
    if($qtd > 0) {
        print "<table class= 'table table-bordered table-striped table-hover'>";
        print "<tr>"; 
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Endereço</th>";
        print "<th>Ações</th>";
        print "</tr>";
        
        while ($row = $res->fetch_object() ){
            print"<tr>";
            print"<td>".$row->id_cliente."</td>";
            print"<td>".$row->nome_cliente."</td>";
            print"<td>".$row->email_cliente."</td>";
            print"<td>".$row->telefone_cliente."</td>";
            print"<td>".$row->endereco_cliente."</td>";
            print "<td>
                <button class='btn btn-primary'onclick=\"location.href='?page=editar-cliente&id_cliente=".$row->id_cliente."'\">Editar</button>

                <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar-cliente&acao=excluir&id_cliente=".$row->id_cliente."'; }\">Excluir</button>
            </td>";
            print "</tr>";
        } 
        print"</table>";
    } else{
        print "<p>Não encontrou resultados</p>";
    }
?>