<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/**
* Home, list and search employees.
*
* @param string $email
*/
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

/**
* Employee detail.
*
*/
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

/**
* /api/ Find employees by salary. (POST)
*
* @return string list employees found in xml 
* @param string $min_salary
* @param string $max_salary
*/
$app->post('/api', function ($request, $response, $args) use ($app) {

    //validating if is POST
    $min_salary = $request->getParsedBody()['min_salary'];
    $max_salary = $request->getParsedBody()['max_salary'];
    $listEmp = json_decode(file_get_contents('assets/json/employees.json'));
    $ret = array();

    $xml = new SimpleXMLElement('<root/>');

    if(isset($min_salary) and isset($max_salary) and intval($min_salary) >=0 and intval($max_salary)>=0)
    {
        //filtering for email
        $ret = array();
        foreach ($listEmp as $key => $empleado) {
            //get sallary in number format
            $sallary = preg_replace('/[^\d,\.]/', '', $empleado->salary);
            $sallary = preg_replace('/,(\d{2})$/', '.$1', $sallary);
            $sallary = str_replace(',', '', $sallary);
            if($sallary >=$min_salary and $sallary<=$max_salary)
            {
                $add = array(
                            'id' => $empleado->id,
                            'name' => $empleado->name,
                            'email' => $empleado->email,
                            'salary' => $empleado->salary
                        );
                $ret[] = $add;
                array_walk_recursive($add, array ($xml, 'addChild'));
            }           
        }
    }

  // creating object of SimpleXMLElement
  $xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
  array_to_xml($ret,$xml_data);
//   $response->headers->set('Content-Type', 'text/xml');  
  $response = $response->withHeader('Content-type', 'text/xml');

  return $this->renderer->render($response, 'api.html', ['xml_data' => $xml_data]);
  
});

function array_to_xml( $data, &$xml_data ) {
  foreach( $data as $key => $value ) {
      if( is_numeric($key) ){
          $key = 'item'.$key; //dealing with <0/>..<n/> issues
      }
      if( is_array($value) ) {
          $subnode = $xml_data->addChild($key);
          array_to_xml($value, $subnode);
      } else {
          $xml_data->addChild("$key",htmlspecialchars("$value"));
      }
   }
}