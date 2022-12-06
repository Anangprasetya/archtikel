<?php


class Test extends Controller
{
    private $nama;

    public function __construct()
    {
        $this->nama = "Anangprasetya";
    }

    public function index()
    {
        echo "Ini adalah controller test" . "<br>";
        echo $this->nama;
    }
}
