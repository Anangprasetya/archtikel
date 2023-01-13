<?php


class Home extends Controller
{
	private $artikelModel;
	public function __construct()
	{
		$this->artikelModel = $this->model('Artikel_model');
	}

	public function index()
	{
		if (isset($_SESSION["user_login"])) {
			$this->view('layout/header');
			$this->view('myhomelogin');
			$this->view('layout/footer');
		} else {
			$data["artikel"] = $this->artikelModel->getPostingAll();
			// $this->view('layout/header');
			// $this->view('myhome');
			// $this->view('layout/footer');

			$this->view('front/header');
			$this->view('develop2', $data);
			$this->view('front/footer');
		}
	}
}
