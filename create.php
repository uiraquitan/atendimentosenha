<?php

include_once "./connect.php";
$tipo = filter_input(INPUT_GET, "tipo", FILTER_SANITIZE_NUMBER_INT);

if (!empty($tipo)) {
    $db = "SELECT * FROM senha 
    WHERE sits_senhas_id = :sits_senhas_id
    AND tipos_senha_id = :tipos_senha_id
    ORDER BY id
    LIMIT 1";

    //PREPARANDO A QUERY
    $result = $conn->prepare($db);

    $result->bindValue(":sits_senhas_id", 2 , PDO::PARAM_INT);
    $result->bindParam(":tipos_senha_id", $tipo, PDO::PARAM_INT);

    //EXECUTANDO A QUERY
    $result->execute();

    // VERIFICAR SE ENCONTROU UMA SENHA NO BANCO

    if (($result) and ($result->rowCount() != 0)) {
        $return = ["status" => true, "msg" => "<p style='color: blue;'>Senha Gerada com sucesso</p>"];
    } else {

        $return = ["status" => false, "msg" => "<p style='color: red;'>ERRO: Senhas esgotadas</p>"];
    }

    // $return = ["status" => true, "msg" => "<p>Senha gerada com sucesso</p>"];
} else {
    $return = ["status" => false, "msg" => "<p>ERRO: Senha não Gerada</p>"];
}

echo json_encode($return);
