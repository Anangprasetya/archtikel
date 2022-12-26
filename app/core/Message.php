<?php

class Message
{

	public static function setMessage($pesan, $aksi, $tipe)
	{
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe
		];
	}


	public static function getMessage()
	{
		if (isset($_SESSION['flash'])) {
			echo '<hr><h3>' . $_SESSION['flash']['pesan'] . " " . $_SESSION['flash']['aksi'] . '</h3><hr>';

			unset($_SESSION['flash']);
		}
	}

	public static function getTemplateMessage()
	{
		if (isset($_SESSION['flash'])) {
			echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert">
		' . $_SESSION['flash']['pesan'] . " " . $_SESSION['flash']['aksi'] . '
		</div>';

			unset($_SESSION['flash']);
		}
	}

	// public static function getTemplateMessage()
	// {
	// 	if (isset($_SESSION['flash'])) {
	// 		echo '
	// 		<footer class="notification-box ' . $_SESSION['flash']['tipe'] . '">' . $_SESSION['flash']['pesan'] . " " . $_SESSION['flash']['aksi'] . '</footer>';

	// 		unset($_SESSION['flash']);
	// 	}
	// }
}
