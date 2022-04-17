<?php  require_once 'global.php' ?>

<?php
    try {
        $ocorrenciaDAO = new OcorrenciaDAO();
        $lista = $ocorrenciaDAO->listar();
        
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
?>

<?php require_once 'cabecalho.php' ?>

<div class="row">
    <div class="col-md-12">
        <h2>Ocorrência</h2>
    </div>
</div>

<hr />

<div class="row">
    <div class="col-md-4">
        <a href="ocorrencia-criar.php" class="btn btn-info btn-block">Adicionar Nova Ocorrência</a><br>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if (count($lista) > 0): ?>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>CONDOMINIO</th>
                    <th>DATA</th>
                    <th>HORA</th>
                    <th>RELATOR</th>
                    <th>TURNO</th>
                    <th>NATUREZA</th>
                    <th>AUTORIA</th>
                <!--    <th>FATOS</th> -->
                    <th class="acao">Visualizar</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $linha): ?>
                        <tr>
                            <td><?= $linha[0] ?></td>
                            <td><?= $linha[1] ?></td>
                            <td><?=date ("d/m/y", strtotime($linha[2])) ?></td>
                            <td><?= $linha[3] ?></td>
                            <td><?= $linha[4] ?></td>
                            <td><?= $linha[5] ?></td>
                            <td><?= $linha[6] ?></td>
                            <td><?= $linha[7] ?></td>
                    <!--    <td><?= $linha[8] ?></td>-->
							
                            <td><a href="ocorrencia-visualizar.php?id=<?php echo $linha[0] ?>" class="btn btn-info">Visualizar</a></td>
                            <td><a href="ocorrencia-editar.php?id=<?php echo $linha[0] ?>" class="btn btn-info">Editar</a></td>
                            <td><a href="ocorrencia-excluir-post.php?id=<?php echo $linha[0] ?>" class="btn btn-danger">Excluir</a></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum produto cadastrado!</p>
        <?php endif ?>
    </div>
</div>
<?php require_once 'rodape.php' ?>
