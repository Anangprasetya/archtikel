<?php


class Home extends Controller
{
	public function index()
	{
		if (isset($_SESSION["user_login"])) {
			$this->view('layout/header');
			$this->view('myhomelogin');
			$this->view('layout/footer');
		} else {
			$this->view('layout/header');
			$this->view('myhome');
			// $this->view('layout/footer');
		}
	}
}
