<?php 
    require_once(__DIR__."../../Model/Senha.php");
    $senha = new Senha();
    $senhas = $senha->getLastSenhas();
    $response = array('success' =>true, "senhas" => $senhas);
    echo json_encode($response);


?>