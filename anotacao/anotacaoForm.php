<div class="row create-operation">
    <div class="text-center">
        <h3>Criar anotação</h3>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <form action="crud/criaAnotacao.php" method="post">
            <div>
                <label for="nome" class="form-label text-left">Nome</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome" required>
                </div>
            </div>
            <div>
                <label for="conteudo" class="form-label">Descrição</label>
                <div class="col-md-6">
                    <textarea name="conteudo" class="form-control"></textarea>
                </div>
            </div>
            <div>
                <label for="links_uteis" class="form-label">Links úteis</label>
                <div class="col-md-6">
                    <textarea name="links_uteis" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-success mt-3" name="exibicao" value="ultima_anotacao">Criar anotação</button>
                </div>
            </div>
        </form>
    </div>
</div>
