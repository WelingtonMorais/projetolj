<?php require_once 'global.php';

    try {

        $ocorrencia = new Ocorrencia();
        $ocorrenciaDAO = new OcorrenciaDAO();

        $ocorrencia->getid($_POST['id']);
        $ocorrencia->getCondominio($_POST['condominio']);
        $ocorrencia->getData($_POST['data']);
        $ocorrencia->gettHora($_POST['hora']);
        $ocorrencia->getRelator($_POST['relator']);
        $ocorrencia->getTurno($_POST['turno']);
        $ocorrencia->getNatureza($_POST['natureza']);
        $ocorrencia->getAutoria($_POST['autoria']);
        $ocorrencia->getFatos($_POST['fatos']);

        $ocorrenciaDAO->listar_visual($ocorrencia);
        header('Location: ocorrencia-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>