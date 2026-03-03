<?php
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome  = $_POST['cliente_id_cliente'];
            $pizza = $_POST['pizza_id_pizza'];
            $endreco = $_POST['endereco_cliente'];
            $data  = $_POST['data_venda'];
            $preco = $_POST['preco_venda'];

            $sql = "INSERT INTO venda (
                        cliente_id_cliente,
                        pizza_id_pizza,
                        endereco_cliente,
                        data_venda,
                        preco_venda
                    ) VALUES (
                        '$nome',
                        '$pizza',
                        '$endreco',
                        '$data',
                        '$preco'
                    )";
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break; 

        case 'editar':
            $sql = "UPDATE venda SET
						cliente_id_cliente='".$_POST["cliente_id_cliente"]."',
						endereco_cliente='".$_POST["endereco_cliente"]."',
						pizza_id_pizza='".$_POST["pizza_id_pizza"]."',
						data_venda='".$_POST["data_venda"]."',
                        preco_venda='".$_POST["preco_venda"]."'
					WHERE
						id_venda=".$_POST["id_venda"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='?page=listar-venda';</script>";
			}
			break;

        case 'excluir':
            $sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST["id_venda"];
            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Erro ao excluir!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
    }