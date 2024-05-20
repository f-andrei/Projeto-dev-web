<div class="row create-operation">
    <div class="text-center">
        <h3>Adicionar contato</h3>
    </div>
    <div class="col-md-4"></div>
        <div class="col-md-8">
            <form action="crud/adicionarContato.php" method="post">
                <div>
                    <label for="nome" class="form-label text-left">Nome</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                </div>
                <div>
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sobrenome">
                    </div>
                </div>
                <div>
                    <label for="telefone" class="form-label">Telefone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="telefone" placeholder="43 99999-8888" required>
                    </div>
                </div>
                <div>
                    <div class="col-md-6">
                        <label for="tipo_telefone" class="form-check-label mt-1">Celular</label>
                        <input type="radio" name="tipo" class="form-check-input me-3 mt-2" value="celular" checked>
                        <label for="tipo_telefone" class="form-check-label mt-1">Fixo</label>
                        <input type="radio" name="tipo" class="form-check-input mt-2" value="fixo">
                    </div>
                </div>
                <div>
                    <label for="empresa" class="form-label">Empresa</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="empresa">
                    </div>
                </div>
                <div>
                    <label for="nome" class="form-label">Email</label>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 text-center">
                        <button type="submit" class="btn btn-success mt-3" name="exibicao" value="ultimo_contato">Adicionar contato</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>