<?php

class Artikel extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION["user_login"])) {
            header('Location:' . BASEURL . 'account/');
        }
    }
    public function index()
    {
        $this->view('layout/header');

        $id_user = $this->model("Account_model")->getFindUser($_SESSION["user_login"]["username"]);


        $d = $this->model("Artikel_model")->getAll($id_user["id_user"]);

        $data = [
            "artikel" => $d,
            "jd" => "LIST SEMUA ARTIKEL"
        ];

        $this->view('artikel/index', $data);
        $this->view('layout/footer');
    }

    public function draf()
    {
        $id_user = $this->model("Account_model")->getFindUser($_SESSION["user_login"]["username"]);
        $d = $this->model("Artikel_model")->getDraf($id_user["id_user"]);
        $data["artikel"] = $d;

        $this->view('layout/header');
        $this->view('artikel/draf', $data);
        $this->view('layout/footer');
    }

    public function posting()
    {
        $id_user = $this->model("Account_model")->getFindUser($_SESSION["user_login"]["username"]);
        $d = $this->model("Artikel_model")->getPosting($id_user["id_user"]);

        $data = [
            "artikel" => $d,
            "jd" => "LIST SEMUA ARTIKEL POSTING"
        ];

        $this->view('layout/header');
        $this->view('artikel/index', $data);
        $this->view('layout/footer');
    }

    public function kategoriTampil()
    {
        $this->model("Category_model")->getAll();
        die();
    }

    public function edit_konten($slug)
    {
        $id_user = $this->model("Account_model")->getFindUser($_SESSION["user_login"]["username"]);
        $single_artikel = $this->model("Artikel_model")->getFindArtikel($slug);

        if ($id_user["id_user"] == $single_artikel["id_users"]) {
            $data["artikel"] = $single_artikel;

            $this->view('layout/header');
            $this->view('artikel/form_edit_konten', $data);
            $this->view('layout/footer');
        }
    }

    public function proses_edit_konten()
    {
        if (isset($_POST)) {
            if ($this->model("Artikel_model")->updateKonten($_POST)) {
                Message::setMessage("Berhasil", "Update Konten", "success");
                header('Location:' . BASEURL . 'artikel/');
            }
        }
    }

    public function buat()
    {
        $this->view('layout/header');

        $arr = $this->model("Category_model")->get();
        $data['kategori'] = $arr;
        $this->view('artikel/form_buat', $data);
        $this->view('layout/footer');
    }

    public function proses_buat()
    {
        if (isset($_POST)) {
            if ($this->model("Artikel_model")->insert($_POST)) {
                Message::setMessage("Berhasil", "Membuat Artikel Baru", "success");
                header('Location:' . BASEURL . 'artikel/');
            }
        }
    }

    public function view_konten($slug)
    {
        $this->view('layout/header');
        $single_artikel = $this->model("Artikel_model")->getFindArtikel($slug);
        echo $single_artikel["isi_posting"];
        $this->view('layout/footer');
    }

    public function delete_konten()
    {
        if (isset($_POST["tbl_hps"])) {
            unset($_POST["tbl_hps"]);
            if ($this->model("Artikel_model")->deleteKonten($_POST["slug"])) {
                Message::setMessage("Berhasil", "Menghapus Artikel", "success");
                header('Location:' . BASEURL . 'artikel/');
            }
        } else {
            header('Location:' . BASEURL . 'artikel/');
        }
    }

    public function publish_konten()
    {
        if (isset($_POST["tbl_pbsh"])) {
            unset($_POST["tbl_pbsh"]);
            if ($this->model("Artikel_model")->publishKonten($_POST["slug"])) {
                Message::setMessage("Berhasil", "Memproses Publish Artikel", "success");
                header('Location:' . BASEURL . 'artikel/');
            }
        } else {
            header('Location:' . BASEURL . 'artikel/');
        }
    }
}
