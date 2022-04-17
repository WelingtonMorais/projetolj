<?php require_once 'cabecalho.php' ?>
<?php require_once 'global.php' ?>

<?php
	
	try{
		$idRecebido = $_GET['id'];
		$ocorrenciaDAO = new OcorrenciaDAO();
		$lista = $ocorrenciaDAO -> listarPorId($idRecebido);
		
	}
	catch(Exeption $e){
		
	}
?>
    <div class="row">
        <div class="col-md-12">
            <h2><p align="center">Editar Ocorrência</p></h2>
        </div>
    </div>

    <hr />

    <form action="ocorrencia-editar-post.php" method="post">
        <input type="hidden" name="id" id="id" value = "<?php echo $lista[0] ?>">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label for="condominio">Condomínio</label>
                    <input for="condominio" type="text" name="condominio" id="condominio" class="form-control" placeholder="Condominio" required value="<?php    echo $lista[1] ?>">
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input for="data" type="text" name="data" id="data" class="form-control" placeholder="Data" required value="<?php echo $lista[2] ?>">
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input for="hora" type="time" name="hora" id="hora" class="form-control" placeholder="hora" required value="<?php   echo $lista[3] ?>">
                </div>
                
                <div class="form-group">
                    <label for="relator">Relator</label>
                    <input for="relator" type="name" name="relator" id="relator" class="form-control" placeholder="relator" required value="<?php   echo $lista[4] ?>">
                </div>
                <div class="form-group">
                        <label for="turno">Turno</label><br>
                        <input type="text" class="form-control" name="turno" value="<?php   echo $lista[5] ?>" required>
                    </div>
                <div class="form-group">
                    <label for="natureza">Natureza</label>
                    <input for="natureza" type="text" name="natureza" id="natureza" class="form-control" placeholder="Natureza" required value="<?php   echo $lista[6] ?>">
                </div>

                <div class="form-group">
                    <label for="autoria">Autoria</label>
                    <input for="autoria" type="text" name="autoria" id="autoria" class="form-control" placeholder="Autoria" required value="<?php   echo $lista[7] ?>">
                </div>

                <div class="form-group">
                    <label for="fatos">Ocorrência</label>
                    <input for="fatos" type="text" name="fatos" id="fatos" class="form-control" placeholder="Fatos" required value="<?php    echo $lista[8] ?>"> </input>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                </div>

            </div>
        </div>
    </form>

<?php require_once 'rodape.php' ?>