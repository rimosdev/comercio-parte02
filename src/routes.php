<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

// Render Twig template in route
$app->get('/', function ($request, $response, $args) {

    // $q = $app->request->post('q');
    $empleados = json_decode(file_get_contents('assets/json/employees.json'));

    return $this->view->render($response, 'employees_list.html', [
        'empleados' => $empleados,
        'base_url' => ''
    ]);
})->setName('profile');

$app->get('/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
