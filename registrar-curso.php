<h1> Registrar Novo Curso </h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"/>
    <div class="mb-3">
        <label> NOME </label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>