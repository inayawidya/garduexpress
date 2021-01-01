<?php

class Account_model extends Database {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    function createAccount($data, $password){
        $q = "INSERT INTO user (username,  email, password, role) VALUES (:username, :email, :password, :role)";
        $this->db->query($q);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $data['role']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    function getIDUser($username){
        $this->db->query("SELECT id_user FROM user WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->singleOBJ();
    }


   function login($username, $password){
       $this->db->query("SELECT * FROM user WHERE username = :username");
       $this->db->bind(':username', $username);
       $row = $this->db->singleOBJ();
       $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
       
   }

    public function checkUsername($username){
       $q = "SELECT username FROM user WHERE username = '$username'";
       $this->db->query($q);
       return $this->db->single();
   }

   public function cektarif($data){
    //var_dump($data);
    //die();
    $asal = $data['asal'];
    $tujuan = $data['tujuan'];
    $berat = $data['berat'];
    //$this->db->query("SELECT asal, tujuan, berat FROM cektarif WHERE asal ='$asal' AND tujuan = '$tujuan' AND berat = '$berat'");
    $this->db->query("SELECT harga FROM cektarif WHERE asal ='$asal' AND tujuan = '$tujuan' AND berat = '$berat'");
    return $this->db->resultSet();
}
    public function cekresi($data){
    //var_dump($data);
    //die();
    $resi = $data['resi'];
    $this->db->query("SELECT * FROM cekresi WHERE resi ='$resi'");
    return $this->db->resultSet();
}
   /*function checktarif(){
       $thequery = "SELECT * FROM cektarif";
       $res = $this->db->query($thequery);
       return $res->result_array();
   }
   function ($){
       $ = $this->input->post(id_cektarif);
       
   */
}