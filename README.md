# Ejercicio parte 2 - El comercio

Se realiza listado de empleados, detalles, búsqueda por Email y se expone un api que permite la búsqueda por rango de salarios.

## Rutas

Listado de empleados

	/


Búsqueda por email y muestra el listado de coincidencias: 

	/?email={email}

Detalle de un empleado 

	/e/{id}

Api búsqueda de empleados por rango de salario (XML) 

	/api
	@Method: POST
	@Param double min_salary
	@Param double max_salary
	@Return string XML Listado de empleados



## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test

That's it! Now go build something cool.