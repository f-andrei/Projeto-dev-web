<div class="create-operation">
    <div class="text-center">
        <h3>Enviar email</h3>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <form action="crud/enviaEmail.php" method="post">
                <div class="mb-3">
                    <label for="remetente" class="form-label text-left">De</label>
                    <div class="col-md-6">
                        <?php
                            require '../conectaDb.php';
                            $select = "SELECT id, nome, email FROM contato";
                            $contatos = mysqli_query($banco, $select);
                            if ($contatos) {
                                echo '<select name="remetente" class="form-select" aria-label="Default select example" required>';
                                while ($row = mysqli_fetch_assoc($contatos)) {
                                    $email = htmlspecialchars($row['email']);
                                    $nome = htmlspecialchars($row['nome']);
                                    $id = htmlspecialchars($row['id']);
                                    echo "<option value='$id'>-> $nome   ......   $email</option>";
                                }
                                echo '</select>';
                            }
                        ?>
                </div>
                <div class="mb-3">
                    <label for="destinatario" class="form-label text-left">Para</label>
                    <div class="col-md-6">
                        <?php
                            require '../conectaDb.php';
                            $select = "SELECT id, nome, email FROM contato";
                            $contatos = mysqli_query($banco, $select);
                            if ($contatos) {
                                echo '<select name="destinatario" class="form-select" aria-label="Default select example" required>';
                                while ($row = mysqli_fetch_assoc($contatos)) {
                                    $email = htmlspecialchars($row['email']);
                                    $nome = htmlspecialchars($row['nome']);
                                    $id = htmlspecialchars($row['id']);
                                    echo "<option value='$id'>-> $nome   ......   $email</option>";
                                }
                                echo '</select>';
                            }
                        ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="assunto" class="form-label">Assunto</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="assunto">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="conteudo" class="form-label">Conteúdo</label>
                    <div class="col-md-6">
                        <textarea name="conteudo" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 text-center">
                        <button type="submit" class="btn btn-success mt-3 mb-3" value="ultimo_contato">Enviar email</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
    </div>
</div>
