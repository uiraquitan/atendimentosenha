<?php
include_once "./connect.php";

$tipo = filter_input(INPUT_GET, "tipo", FILTER_SANITIZE_NUMBER_INT);
if (!empty($tipo)) {

    $dados = "SELECT * FROM senha_gerada WHERE id = :id LIMIT 1";
    $dado = $conn->prepare($dados);
    $dado->bindParam(":id", $tipo, PDO::PARAM_INT);
    $senha = $dado->execute();

    if ($senha) {

        $senha = "UPDATE senha_gerada SET sits_senha_id = 4 WHERE id = :id";

        $dados = $conn->prepare($senha);

        $dados->bindParam(":id", $tipo, PDO::PARAM_INT);
        $senhas = $dados->execute();

        $return = ["status" => false, "msg" => "Senha removida {$tipo}", "id" => $tipo];
    } else {
        $return = ["status" => true, "msg" => "Erro ao chamar senha"];
    }

    echo json_encode($return);
}
