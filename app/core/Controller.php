<?php 

class Controller {
	public function view($value, $data = [])
	{
		require_once '../app/views/' . $value . '.php';
	}

	public function model($name)
	{
		require_once '../app/models/' . $name .'.php';
		return new $name;
	}
}