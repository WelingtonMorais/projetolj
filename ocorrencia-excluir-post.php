<?php require_once 'global.php';

    try {
		
		$id = $_GET['id'];
		$ocorrenciaDAO =new OcorrenciaDAO;
        $ocorrenciaDAO->excluir($id);
		
        
        header('Location: ocorrencia-listar.php');
    }
    catch(Exception $e){
        Erro::trataErro($e);
    }
?>