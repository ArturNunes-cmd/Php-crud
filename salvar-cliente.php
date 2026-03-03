<?php
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome  = $_POST['nome_cliente'];
            $email = $_POST['email_cliente'];
            $fone  = $_POST['telefone_cliente'];
            $endereco = $_POST['endereco_cliente'];

            $sql = "INSERT INTO cliente (
                        nome_cliente,
                        email_cliente,
                        telefone_cliente,
                        endereco_cliente
                    ) VALUES (
                        '$nome',
                        '$email',
                        '$fone',
                        '$endereco'
                    )";
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }else{
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }
            break; 

        case 'editar':
            $sql = "UPDATE cliente SET
						nome_cliente='".$_POST["nome_cliente"]."',
						email_cliente='".$_POST["email_cliente"]."',
						telefone_cliente='".$_POST["telefone_cliente"]."',
                        endereco_cliente='".$_POST["endereco_cliente"]."'
					WHERE
						id_cliente=".$_POST["id_cliente"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-cliente';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='?page=listar-cliente';</script>";
			}
			break;

        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }else{
                print "<script>alert('Erro ao excluir!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }
            break;
    }