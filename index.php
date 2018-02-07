<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello Veera!";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
