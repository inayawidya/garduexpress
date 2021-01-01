<?php

class Account extends Controller
{
    public function __construct(){
        $this->accountModel = $this->model('Account_model');
    }

    public function login(){

        $this->view('admin/login');
    }

    public function checkingLogin(){
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //$username = $data['username'];
            //var_dump($data);
            //die();
            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                
                $loggedInUser = $this->model('Account_model')->login($data['username'], $data['password']);

                //$id_user = $this->accountModel->getIDUser($username);
                //var_dump($id_user);
                //die();
                //echo 'enak';
                //die;
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                    //$this->logout($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                    $this->redirect("admin", "login");
                    }
            }

            else {
                $data = [
                    'username' => '',
                    'password' => '',
                    'usernameError' => '',
                    'passwordError' => ''
                ];
                $this->redirect("admin", "login");
            }

        } 
    }
    public function createAccount(){
        $userData = [
            'username'      => $this->input('username'),
            'email'         => $this->input('email'),
            'password'      => $this->input('password'),
            'role'         => $this->input('role'),
            'usernameError' => '',
            'emailError'    => '',
            'passwordError' => ''
        ];
        //var_dump ($userData);
        //die;
        if(empty($userData['email'])){
            $userData['emailError'] = "Mohon inputkan email Anda";
        }

        if(empty($userData['username'])){
            $userData['usernameError'] = 'Mohon masukan username '; 
        }else{

            $username = $this->accountModel->checkUsername($userData['username']); 
            if(!empty($username)){
               $userData['usernameError'] = "Mohon maaf username telah terdaftar";  
            }
        }

        if(empty($userData['password'])){
            $userData['passwordError'] = "Mohon masukan password karena dibutuhkan";
        }else if(strlen($userData['password'] < 6)){
            $userData['passwordError'] = "Minimal 6 karakter untuk password";
        }
        //var_dump ($userData);
        //die;
        if( empty($userData['usernameError'] && empty($userData['passwordError']))){
            $password = password_hash($userData['password'], PASSWORD_DEFAULT);
            //var_dump ($userData, $password);
            //die;
            if($this->accountModel->createAccount($userData, $password)){
               
                Flasher::setFlash("Your account has been created successfully, please login","accountCreated", "success");
                header('location:' . BASEURL . '/Admin/login' );
            }
        }else{
        //    $this->view('admin/login', $userData);
        echo "maaf belum berhasil";
        }

    }
    public function createUserSession($user) {
        
        //Melakukan set session
        $_SESSION['id_user'] = $user->id_user;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        
        if($_SESSION['role'] == 1){

            $this->redirect("admin", "index");

        }else {

            $this->redirect("pelanggan", "index");
        }
      
    }
    public function logout(){
        unset($_SESSION['id_user']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        $this->redirect("Admin", "Index");
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
                $this->redirect("Admin", "index", $harga);
                // if ($_POST['berat']==1) {
                //     $ongkir = 1*$harga;
                //     $this->redirect("Admin", "index", $ongkir);
                // }
                // elseif ($_POST['berat']==2){
                //     $ongkir = 2*$harga;
                // }
                // elseif ($_POST['berat']==3){
                //     $ongkir = 3*$harga;
                // }
                // elseif ($_POST['berat']==4){
                //     $ongkir = 4*$harga;
                // }
                // elseif ($_POST['berat']==5){
                //     $ongkir = 5*$harga;
                // }
                // elseif ($_POST['berat']>5){
                //     $ongkir = 5*$harga;            
                // }
                // else echo 'input salah';
    

        }        
    }

    public function cekresi(){
        var_dump($_POST);
        die();

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'resi' => trim($_POST['resi']),
            ];
   
                $cekresi = $this->model('Account_model')->cekresi($data);
                //var_dump($cekresi);
                //die();
        }        
    }
}