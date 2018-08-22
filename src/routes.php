<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

// Render Twig template in route
$app->get('/', function ($request, $response, $args) {

    $email = $request->getQueryParam('email');
    // $foo = $request->getAttribute('email');
    $empleados = json_decode(file_get_contents('assets/json/employees.json'));

    // checking do filter
    if($email) {
        $empleados_found = [];
        foreach ($empleados as $key => $value) {
            if(strstr($value->email, $email)) {
                $empleados_found[] = $value;
            }
        }
        $empleados = $empleados_found;
    }

    // exit($request->getUri()->getBaseUrl());

    return $this->view->render($response, 'employees_list.html', [
        'empleados' => $empleados,
        'q_email'   => $email,
        'base_url'  => $request->getUri()->getBaseUrl()
    ]);
})->setName('employees');

// Render Twig template in route
$app->get('/e/{eid}', function ($request, $response, $args) {

    // $q = $app->request->post('q');
    $empleados = json_decode(file_get_contents('assets/json/employees.json'));
    $empleado = null;
    if(trim($args['eid']) != '')
  	{
	    foreach ($empleados as $key => $emp) {
	    	if($args['eid'] == $emp->id)
                $empleado = $emp;
                $skills = [];
                if(isset($empleado->skills)) {
                    foreach ($empleado->skills as $key => $skill) {
                        $skills[] = $skill->skill;
                    }
                }
                $skills = implode(',', $skills);
                
	    }
	}
    return $this->view->render($response, 'employee_detail.html', [
        'empleado'  => $empleado,
        'skills'    => $skills,
        'base_url'  => $request->getUri()->getBaseUrl()
    ]);
})->setName('profile');