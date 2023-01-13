<?php
class Publish extends Controller
{
    public function index($slug)
    {
        $single_artikel = $this->model("Artikel_model")->getFindArtikel($slug);
        if ($single_artikel["tanggalPublish_posting"] == NULL) {
            header('Location:' . BASEURL);
        } else {

            $user = $this->model("Account_model")->getFindUserID($single_artikel["id_users"]);
            $kategori = $this->model("Category_model")->getFindbyArtikel($single_artikel["id_posting"]);

            $data = [
                "artikel" => $single_artikel,
                "user" => $user,
                "kategori" => $kategori
            ];

            // $this->view('layout/header');
            // $this->view('artikel/lihat_artikel', $data);
            // $this->view('layout/footer');
            // print_r($data);

            $this->view('front/header');
            $this->view('artikel/lihat_artikel2', $data);
            $this->view('front/footer');
        }
    }

    public function cekPublish($slug)
    {
        $artikel = $this->model("Artikel_model")->getFindArtikel($slug);
        if ($artikel["tanggalPublish_posting"] == NULL) {
            echo "belum publish";
        } else {
            echo "aman";
        }
    }

    public function pencarian()
    {
        $ambil = $this->model("Artikel_model")->getSearch($_POST["key"]);

        $data["artikel"] = $ambil;

        $this->view('front/header');
        $this->view('develop2', $data);
        $this->view('front/footer');
    }
}
