<?php

class Admin extends Controller
{
    public function index($ongkir=NULL)
    {
    //var_dump($ongkir);
    //die;
        $this->view('common/header');
        $this->view('admin/index', false, array(
            'ongkir' => $ongkir));
        $this->view('common/footer');
    }
    public function index2($ongkir)
    {
    //var_dump($ongkir);
    //die;
        $this->view('common/header');
        $this->view('admin/index', false, array(
            'ongkir' => $ongkir));
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
        //var_dump($_POST);
        //die();

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'asal' => trim($_POST['asal']),
                'tujuan' => trim($_POST['tujuan']),
                'berat' => trim($_POST['berat'])
            ];
   
                $cektarif = $this->model('Account_model')->cektarif($data);
                // var_dump($cektarif[0]['harga']);
                // die();
                $harga = $cektarif[0]['harga'];
                //$this->redirect("Admin", "index", $harga);
                if ($_POST['berat']==1) {
                    $ongkir = 1*$harga;
                    $this->index($ongkir);
                }
                elseif ($_POST['berat']==2){
                    $ongkir = 2*$harga;
                }
                elseif ($_POST['berat']==3){
                    $ongkir = 3*$harga;
                }
                elseif ($_POST['berat']==4){
                    $ongkir = 4*$harga;
                }
                elseif ($_POST['berat']==5){
                    $ongkir = 5*$harga;
                }
                elseif ($_POST['berat']>5){
                    $ongkir = 5*$harga;            
                }
                else echo 'input salah';
    

        }        
    }
}
