<?php
header('Content-Type: application/json');

function getMotel() {
    $defaultCity = $_GET['cidade'];
    $apiUrl = "https://vejawhats.site/api/motel.php?cidade=" . urlencode($defaultCity);
    $motelResponse = file_get_contents($apiUrl);
    $motelData = json_decode($motelResponse, true);

    $result = [
        "status" => "success",
        "motel" => [
            "name" => isset($motelData['motel']['name']) ? $motelData['motel']['name'] : "Motel não localizado"
        ]
    ];

    return $result;
}

echo json_encode(getMotel());