<?php


class Account_model
{

	private $table = 'users';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function insert($data)
	{
		$data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
		$column = implode(", ", array_keys($data));

		$val = array();
		$idx = 0;
		foreach ($data as $key => $v) {
			$val[$idx] = "'" . $v . "'";
			$idx++;
		}

		$val = implode(", ", $val);

		$query = "INSERT INTO $this->table ($column) VALUES ($val)";

		$this->db->query($query);
		if ($this->db->execute() === TRUE) {
			return TRUE;
		}

		return FALSE;
	}

	public function cekUser($data)
	{
		$user = "'" . $data["username"] . "'";
		$query = "SELECT * FROM $this->table WHERE username = $user";

		$this->db->query($query);
		$x = $this->db->execute();
		if ($x->num_rows > 0) {
			$row = $x->fetch_assoc();
			if (password_verify($data["password"], $row["password"])) {
				$_SESSION["user_login"] = [
					"username" => $row["username"],
					"nama" => $row["nama"],
					"email" => $row["email"]
				];

				return True;
			}
		}

		return False;
	}

	public function getFindUser($username)
	{
		$username = "'" . $username . "'";
		$query = "SELECT id_user FROM $this->table WHERE username=$username";
		$this->db->query($query);
		$run = $this->db->execute();
		if ($run->num_rows > 0) {
			$row = $run->fetch_assoc();
			return $row;
		}
		return false;
	}

	public function getFindUserID($id)
	{
		$id = "'" . $id . "'";
		$query = "SELECT * FROM $this->table WHERE id_user=$id";
		$this->db->query($query);
		$run = $this->db->execute();
		if ($run->num_rows > 0) {
			$row = $run->fetch_assoc();
			return $row;
		}
		return false;
	}
}
