<?php


class Home extends Controller
{
    public function index()
    {
        $this->view('v_home');
    }
    public function profile()
    {
        $this->view('v_profile');
    }
    public function about()
    {
        $this->view('v_about');
    }
}
