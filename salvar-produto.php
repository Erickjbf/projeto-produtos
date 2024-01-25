<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $nome = $_REQUEST["nome"];
            $id = $_REQUEST["id"];
            $descricao = $_REQUEST["descricao"];
            $preco = $_REQUEST["preco"];

            $sql = "INSERT INTO produtos (nome, id, descricao, preco) VALUES ('{$nome}', '{$id}', '{$descricao}', '{$preco}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=novo';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;
        case "editar":
            $nome = $_REQUEST["nome"];
            $id = $_REQUEST["id"];
            $descricao = $_REQUEST["descricao"];
            $preco = $_REQUEST["preco"];

            $sql = "UPDATE produtos SET
                        nome='{$nome}',
                        descricao='{$descricao}',
                        preco='{$preco}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Atualizado com sucesso');</script>";
                print "<script>location.href='?page=novo';</script>";
            } else {
                print "<script>alert('Não foi possível atualizar');</script>";
                print "<script>location.href='?page=novo';</script>";
            }

            break;
        case "excluir":

            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
    }
?>
