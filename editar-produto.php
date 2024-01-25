<h1>Editar Produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Código</label>
        <input type="number" name="id" value="<?php print $row->id; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-4">
        <label>Preço</label>
        <input type="number" name="preco" value="<?php print $row->preco; ?>" class="form-control">
    </div>
   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
