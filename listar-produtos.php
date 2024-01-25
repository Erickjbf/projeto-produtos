<h1>Lista de Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";              
        print "<th>Descrição</th>"; 
        print "<th>Preço R$</th>";
        print "<th>Ações</th>";     
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";              
            print "<td>".$row->descricao."</td>"; 
            print "<td>".$row->preco."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                   
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{return false;}\"
                        class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<p class='alert alert-danger'>Nenhum produto foi encontrado!</p>";
    }
?>
