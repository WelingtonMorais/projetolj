<?php  require_once 'global.php' ?>

<?php require_once 'cabecalho.php' ?>
<?php
    
    try{
        $idRecebido = $_GET['id'];
        $ocorrenciaDAO = new OcorrenciaDAO();
        $lista = $ocorrenciaDAO -> listarPorId($idRecebido);
        
    }
    catch(Exeption $e){
        
    }
?>


<div id="dados">
        <div class="text-center">
            <img src="img/Imagem1.png"width=300 height=100 class="rounded" alt="...">
        </div>            

<hr />

<script>
function funcao_pdf(){

    var pegar_dados = document.getElementById('dados').innerHTML;

    var janela = window.open('','',"width =800,heigth=297");
    janela.document.write ('<html><head>');
    janela.document.write ('<title></title></head>');
    janela.document.write('<body>');
    janela.document.write(pegar_dados);
    janela.document.write('</body></html>');
    janela.document.close();
    janela.print();

};

</script>
    <div class="row">
        <div class="col-md-12" >
                                <h3><b>Condomínio:</b><?php echo $lista[1] ?>

                                <h4><b>Data:</b> <?php 

                                   // echo date("d/m/y" ,strtotime($lista[2]))

                            setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                                date_default_timezone_set('America/Sao_Paulo');

                                $date = $lista[2];
                                echo strftime("%A, %d de %B de %Y", strtotime( $date ));
                                 ?></h4>

                                <h4><b>Horário:</b> <?php echo $lista[3] ?></h4>
                                <h4><b>Relator:</b> <?php echo $lista[4] ?></h4>
                                <h4><b>Turno:</b> <?php echo $lista[5] ?></h4>
                                <h4><b>Natureza:</b> <?php echo $lista[6] ?></h4>
                                <h4><b>Autoria:</b> <?php echo $lista[7] ?></h4>
                                <div>
                                    <h3 style="text-align: center"><b><u>Fatos:</u></b></h3><br>
                                    <p><?php echo $lista[8] ?></p>
                                </div>
							<br>

        </div>
    </div>
</div> <!-- div fim id = dados --> 

<td><a href="" class="btn btn-info" onclick="funcao_pdf()">Gerar PDF</a></td>
<?php require_once 'rodape.php' ?>



