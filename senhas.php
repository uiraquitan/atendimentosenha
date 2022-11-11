<?php

include_once  "./connect.php";

// LER TODAS AS SENHAS GERADAS
$senhas = "SELECT s.nome_senha as snome_senha, sg.id as sgid, ss.nome as ssnome FROM senha_gerada as sg 
INNER JOIN senha AS s ON sg.senha_id = s.id
INNER JOIN sits_senhas AS ss ON sg.sits_senha_id = ss.id  WHERE sg.sits_senha_id = 2 ORDER BY s.nome_senha  DESC LIMIT 4  ";

$senhas_gerada = $conn->prepare($senhas);

$senhas_gerada->execute();

if ($senhas_gerada->rowCount() != 0) {

    $dados = $senhas_gerada->fetchAll(PDO::FETCH_CLASS);

    $return = ["status" => true, "senha" =>  $dados];
} else {

    $return = ["status" => false, "msg" => "Não tem senha"];
}

echo json_encode($return);
