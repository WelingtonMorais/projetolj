<?php require_once 'global.php';

    try {

        $ocorrencia = new Ocorrencia();
        $ocorrenciaDAO = new OcorrenciaDAO();

        $ocorrencia->setId($_POST['id']);
		$ocorrencia->setCondominio($_POST['condominio']);
        $ocorrencia->setData($_POST['data']);
        $ocorrencia->setHora($_POST['hora']);
        $ocorrencia->setRelator($_POST['relator']);
		$ocorrencia->setTurno($_POST['turno']);
		$ocorrencia->setNatureza($_POST['natureza']);
        $ocorrencia->setAutoria($_POST['autoria']);
        $ocorrencia->setFatos($_POST['fatos']);

        $ocorrenciaDAO->inserir($ocorrencia);
        header('Location: ocorrencia-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>