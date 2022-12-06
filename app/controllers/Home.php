<?php


class Home extends Controller
{
	public function index()
	{
		if (isset($_SESSION["user_login"])) {
			$this->view('layout/header');
			$this->view('myhomelogin');
			$this->view('layout/header');
		} else {
			$this->view('myhome');
		}
	}
}
