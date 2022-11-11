<?php

include_once  "./connect.php";

$tipo  = filter_input(INPUT_GET, "tipo", FILTER_SANITIZE_NUMBER_INT);

// LER TODAS AS SENHAS GERADAS
$senhas = "SELECT s.nome_senha FROM senha_gerada AS sg
INNER JOIN senha AS s ON sg.senha_id = s.id
WHERE sg.id = $tipo LIMIT 1";

$senhas_gerada = $conn->prepare($senhas);

$senhas_gerada->execute();

if ($senhas_gerada->rowCount() != 0) {

    $dados = $senhas_gerada->fetch(PDO::FETCH_ASSOC);

    // var_dump($dados['nome_senha']);

    $return = ["status" => true, "senha" =>  $dados['nome_senha']];

} else {

    $return = ["status" => false, "msg" => "Não tem senha"];
}

echo json_encode($return);
