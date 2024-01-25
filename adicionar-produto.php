<h1>Novo Produto</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-2">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-2">
        <label>Código</label>
        <input type="int" name="id" class="form-control">
    </div>
    <div class="mb-2">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-4">
        <label>Preço</label>
        <input type="float" name="preco" class="form-control">
    </div>
   
    <div class="mb-2">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
