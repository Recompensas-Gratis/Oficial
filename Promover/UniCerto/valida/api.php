<?php

// Definir o cabeçalho para retornar JSON
header('Content-Type: application/json');



// Verificar se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura o CPF enviado via POST
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;

    if ($cpf) {
        // Montar a URL da API com o CPF
        $apiUrl = "https://api.dataget.tech/?cpf={$cpf}&api_key=zl8QVWW1Fdv0";

        $options = [
            'http' => [
                'header' => "Origin-Sec: c72a9a5ff481a585407473b9b4440325fd4657707562e6769335502ed922437b"
            ]
        ];
        $context = stream_context_create($options);

        // Fazer a requisição para a API com o contexto
        $response = file_get_contents($apiUrl, false, $context);


        // Verificar se a resposta é válida
        if ($response !== false) {
            // Converter a resposta JSON em um array associativo
            $data = json_decode($response, true);
            $data = $data['dados'];
            // Extrair os campos necessários
            $nome = isset($data['nome']) ? $data['nome'] : 'Nome não encontrado';
            $nomeMae = isset($data['mae']) ? $data['mae'] : 'Nome da mãe não encontrado';
            $nascimento = isset($data['nascimento']) ? $data['nascimento'] : 'Data de nascimento não encontrada';

             // Preparar a resposta final no formato solicitado
             $responseData = [
                "success" => true,
                "data" => [
                    "success" => true,
                    "data" => [
                        "nome" => $nome,
                        "nomeMae" => $nomeMae,
                        "dataNascimento" => $nascimento
                    ]
                ]
            ];

            // Retornar os dados como JSON
            echo json_encode($responseData);
        } else {
            // Erro ao fazer a requisição
            echo json_encode(['error' => 'Erro ao acessar a API']);
        }
    } else {
        // CPF não foi enviado
        echo json_encode(['error' => 'CPF não enviado']);
    }
} else {
    // Método não permitido
    echo json_encode(['error' => 'Método não permitido']);
}

?>
