<?php
//Carga la funciones comunes top y footer
require('common.php');

class Index extends Common
{
	//Funcion mainpage que genera la pagina por default en caso de no existir el controlador
	function main()
	{
		//Accedemos al metodo del controlador que nos trae la consulta
		$fecha = $this->Model->metodo(1);

		$hello 	= "Hello World!";

		//Metodo que renderiza la vista
		$this->view('index/main', compact('hello','fecha'));
	}

}