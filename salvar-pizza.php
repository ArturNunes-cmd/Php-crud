<?php
include ("preco.php");

switch($_REQUEST['acao']){
    case 'cadastrar':

        $nome  = $_POST['nome_pizza'];
        $borda = $_POST['borda_pizza'];

        // CORRETO:
        $precoPizza = $pizzas[$nome];
        $precoBorda = $bordas[$borda];
        $precoFinal = $precoPizza + $precoBorda;

        $sql = "INSERT INTO pizza (
                    nome_pizza,
                    borda_pizza,
                    preco_pizza
                ) VALUES (
                    '$nome',
                    '$borda',
                    '$precoFinal'
                )";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Cadastrou com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao cadastrar!');</script>";
        }

        print "<script>location.href='?page=listar-pizza';</script>";
    break;

    case 'editar':

        $nome  = $_POST['nome_pizza'];
        $borda = $_POST['borda_pizza'];

        // CORRETO:
        $precoPizza = $pizzas[$nome];
        $precoBorda = $bordas[$borda];
        $precoFinal = $precoPizza + $precoBorda;

        $sql = "UPDATE pizza SET
                    nome_pizza='$nome',
                    borda_pizza='$borda',
                    preco_pizza='$precoFinal'
                WHERE id_pizza=".$_POST["id_pizza"];

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Editou com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao editar!');</script>";
        }

        print "<script>location.href='?page=listar-pizza';</script>";
    break;

    case 'excluir':

        $sql = "DELETE FROM pizza WHERE id_pizza=".$_REQUEST["id_pizza"];
        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Excluiu com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao excluir!');</script>";
        }

        print "<script>location.href='?page=listar-pizza';</script>";
    break;
}
?>
