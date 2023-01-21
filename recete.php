<?php

header('Content-Type: application/json');

if (empty($_POST["TC"])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'tc eksik!'
    ));
    exit;
}

$Idenity = $_POST["TC"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://revoltaire.ltd/Modules/Ilac?Token=Allahbuyukawokenden&Idenity=$Idenity");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

