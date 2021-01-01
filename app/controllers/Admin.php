<?php

class Admin extends Controller
{
    public function index($ongkir = NULL, $cekresi = NULL)
    {
        $this->view('common/header');
        $this->view('admin/index', false, array(
            "ongkir" => $ongkir,
            "resi" => $cekresi
        ));
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
    public function cektarif(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'asal' => trim($_POST['asal']),
                'tujuan' => trim($_POST['tujuan']),
                'berat' => trim($_POST['berat'])
            ];
   
                $cektarif = $this->model('Account_model')->cektarif($data);
                $harga = $cektarif[0]['harga'];
                $this->index($harga);
        }        
    }

    public function cekresiProses(){
        var_dump($_POST['resi']);
        die();

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'resi' => trim($_POST['resi']),
            ];
   
                $cekresi = $this->model('Account_model')->cekresi($data);
                if($cekresi = TRUE){
                    $this->index($cekresi);
                }
                else{
                    echo "Tidak ada resi tersebut";
                }
                //var_dump($cekresi);
                //die();
        }        
    }
}
