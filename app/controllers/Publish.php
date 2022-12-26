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

            $data = [
                "artikel" => $single_artikel,
                "user" => $user
            ];

            $this->view('layout/header');
            $this->view('artikel/lihat_artikel', $data);
            $this->view('layout/footer');
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
}
