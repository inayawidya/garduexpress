<?php

class Admin extends Controller
{
    public function index()
    {
        $this->view('common/header');
        $this->view('admin/index'); 
        $this->view('common/footer');
    }
    public function login()
    {
        $this->view('common/header_login');
        $this->view('admin/login'); 
        $this->view('common/footer_login');
    }
    public function service()
    {
        $this->view('common/header_service');
        $this->view('admin/service'); 
        $this->view('common/footer');
    }
    public function cekresi()
    {
        $this->view('common/header_cekresi');
        $this->view('admin/cekresi'); 
        $this->view('common/footer');
    }
    public function cekongkir()
    {
        $this->view('common/header_cekongkir');
        $this->view('admin/cekongkir'); 
        $this->view('common/footer');
    }
    public function lokasi()
    {
        $this->view('common/header_lokasi');
        $this->view('admin/lokasi'); 
        $this->view('common/footer');
    }
}
