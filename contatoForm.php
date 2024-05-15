<div>
    <div class="text-center">
        <h3>Adicionar contato</h3>
    </div>
    <form action="crud.php" method="post">
        <div>
            <label for="nome" class="form-label text-left">Nome</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div>
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="sobrenome">
            </div>
        </div>
        <div>
            <label for="telefone" class="form-label">Telefone</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="telefone" placeholder="43 99999-8888">
            </div>
        </div>
        <div>
            <div class="col-md-5">
                <label for="tipo_telefone" class="form-check-label mt-1">Celular</label>
                <input type="radio" name="tipo" class="form-check-input me-3 mt-2" value="celular" checked>
                <label for="tipo_telefone" class="form-check-label mt-1">Fixo</label>
                <input type="radio" name="tipo" class="form-check-input mt-2" value="fixo">
            </div>
        </div>
        <div>
            <label for="empresa" class="form-label">Empresa</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="empresa">
            </div>
        </div>
        <div>
            <label for="nome" class="form-label">Email</label>
            <div class="col-md-5">
                <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-3" name="exibicao" value="ultimo_contato">Adicionar contato</button>
        </div>
    </form>
</div>