<?php

class Pelanggan extends Controller {
    public function index()
    {
        $this->view('pelanggan/index');
    }

    public function Barang()
    {
        $this->view('pelanggan/barang'); 
    }

    public function Pengiriman()
    {
        $this->view('pelanggan/pengiriman'); 
    }

    public function Kategori()
    {
        $this->view('pelanggan/kategori'); 
    }

}