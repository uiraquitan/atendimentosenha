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

    $result->bindValue(":sits_senhas_id", 1, PDO::PARAM_INT);
    $result->bindParam(":tipos_senha_id", $tipo, PDO::PARAM_INT);

    //EXECUTANDO A QUERY
    $result->execute();

    // VERIFICAR SE ENCONTROU UMA SENHA NO BANCO
    if (($result) and ($result->rowCount() != 0)) {
        // LER AS INFORMAÇÕES RETORNADAS DO BANCO DO DADOS
        $row = $result->fetch(PDO::FETCH_ASSOC);

        // EXTRAIR PARA IMPRIMIR ATRASVES DA CHAVE
        extract($row);

        // CRIANDO UMA QUERY PARA CADASTRAR A SENHA GERADA
        $criando_senha = "INSERT INTO senha_gerada (id,senha_id,sits_senha_id,created_at) VALUES (null,$id, 2, NOW())";

        // PREPARANDO QUERY
        $gerando_senha = $conn->prepare($criando_senha);

        $gerando_senha->execute();

        if ($gerando_senha->rowCount()) {
            $upSenha = "UPDATE senha SET sits_senhas_id = 2 WHERE id=$id LIMIT 1";
            $upDSenha = $conn->prepare($upSenha);
            $upDSenha->execute();

            $retorna = ["status" => true, "nome_senha" => "<p style='color: #09c;'> $nome_senha  </p>"];

        } else {

            $retorna = ["status" => false, "msg" => "<p style='color: #f00;'>ERRO: Senha não gerada</p>"];
        }

    } else {
        $retorna = ["status" => false, "msg" => "<p style='color: #f00;'>ERRO: Senhas esgotadas</p>"];
    }
} else {
    $retorna = ["status" => false, "msg" => "<p>ERRO: Senha não Gerada</p>"];
}

echo json_encode($retorna);
