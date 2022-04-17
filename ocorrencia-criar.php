<?php require_once 'cabecalho.php' ?>



    <div class="container"> 

        <h2><p align="center">Criar Nova Ocorrência</p></h2>
        <hr />
                <div class="row">
                    <div class="col-sm-5">
                        <form action="ocorrencia-criar-post.php" method="post">  
                			<input type="hidden" name="id" id="id" class="form-control" placeholder="id" required>
                                <div class="form-group">
                                    <label for="condominio">Condomínio</label>
                                    <!--<input for="condominio" type="text" name="condominio" id="condominio" class="form-control" placeholder="Condominio" required> -->
                                    <select class="form-control" name="condominio">
                                      <option selected>Escolher...</option>
                                      <option value="Le Jardin" >Le Jardin</option>
                                      <option value="Portal das Araras">Portal das Araras</option>
                                      <option value="Villa Helvetia">Villa Helvétia</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="data">Data</label>
                                    <input for="data" type="date" name="data" id="data" class="form-control" placeholder="Data de Nascimento" required>
                                    <small class="form-text text-muted">Informe com precisão a data da Ocorrência.</small>
                                </div>
                                <div class="form-group">
                                    <label for="hora">Hora</label>
                                    <input for="hora" type="time" name="hora" id="hora" class="form-control" placeholder="hora" required>
                                </div>
                				
                				<div class="form-group">
                                    <label for="relator">Relator</label>
                                    <input for="relator" type="name" name="relator" id="relator" class="form-control" placeholder="Relator" required>
                                    <small class="form-text text-muted">Nome do responsável pelo preenchimento da Ocorrência.</small>
                                </div>
                				<div class="form-group">
                                        <label for="turno">Turno</label><br>
                                        <input type="radio"name="turno" id='turno' value='Diurno' > Diurno<br>
                                        <input type="radio"name="turno" id='turno' value='Noturno' > Noturno<br>
                                    </div>
                				<div class="form-group">
                                    <label for="natureza">Natureza</label>
                                    <input for="natureza" type="text" name="natureza" id="natureza" class="form-control" placeholder="Natureza" required>
                                    <small class="form-text text-muted">Título da Ocorrência / Assunto Principal.</small>
                                    <small class="form-text text-muted">Ex: "Perturbação do Sossego" (barulho).</small>
                                </div>
                    </div>  
                    
                    <div class="col-sm-1"></div>
                    
                    <div class="col-sm-5"> 
                                <div class="form-group">
                                    <label for="autoria">Autoria</label>
                                    <input for="autoria" type="text" name="autoria" id="autoria" class="form-control" placeholder="Autoria" required>
                                    <small class="form-text text-muted">Quem foi o Autor da infração. Informar Apto e Torre.</small>
                                </div>

                                <div class="form-group">
                                    <label for="fatos">Ocorrência</label>
                                    <textarea rows="8" cols="50"  minlength="20" for="fatos" type="text" name="fatos" id="TEXTOAREA" class="form-control" placeholder="Fatos" required> </textarea>
                                    <small class="form-text text-muted">Máximo de 500 caracteres.</small>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" value="Salvar">
                                </div>
                        </form>
                    </div>
                                
                </div>
    </div>

<?php require_once 'rodape.php' ?>
