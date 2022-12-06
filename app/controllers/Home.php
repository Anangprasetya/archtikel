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
}
