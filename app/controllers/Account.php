<?php


class Account extends Controller
{
	public function index()
	{
		if (isset($_SESSION["user_login"])) {
			header('Location:' . BASEURL);
		}
		$this->view('layout/header');
		$this->view('akun/login');
		// $this->view('akun/login_t');
		$this->view('layout/footer');
	}

	public function register()
	{
		if (isset($_SESSION["user_login"])) {
			header('Location:' . BASEURL);
		}

		$this->view('layout/header');
		$this->view('akun/register');
		$this->view('layout/footer');
	}

	public function proses_register()
	{
		if (isset($_POST)) {
			if ($this->model("Account_model")->insert($_POST)) {
				Message::setMessage("Berhasil", "Melakukan Registrasi", "success");
			} else {
				Message::setMessage("Gagal", "Melakukan Registrasi", "danger");
			}
			header('Location:' . BASEURL . 'account/register');
			exit;
		}

		header('Location:' . BASEURL . 'account/register');
	}

	public function proses_login()
	{
		if (isset($_POST)) {
			if ($this->model("Account_model")->cekUser($_POST)) {
				Message::setMessage("Berhasil", "Melakukan Login", "success");
				header('Location:' . BASEURL);
			} else {
				Message::setMessage("Gagal", "login, periksa Username dan Password kembali", "danger");
				header('Location:' . BASEURL . 'account/');
			}
		}
	}

	public function out()
	{
		if (isset($_SESSION["user_login"])) {
			unset($_SESSION["user_login"]);
			header('Location:' . BASEURL);
		}
	}
}
