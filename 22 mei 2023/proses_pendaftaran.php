<?php

use mahasiswa as GlobalMahasiswa;

class mahasiswa{
    public $nama;
    public $email;
    public $password;

    function __construct($nama, $email, $password){
        $this->nama = $nama;
        $this->email= $email;
        $this->password= $password;
    }
    
    function tampilbiodata(){
        echo $this->nama ."<br />";
        echo $this->email ."<br />";
        echo $this->password ."<br />";
    }
    function validasi(){
        if($this->nama == "" OR $this->email == "" OR $this->password == ""){
            echo "Masukan Nama,Email dan Password";
            return false;
        }else{
            return true;
        }
    }
}
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];


$mahasiswa = new mahasiswa ($nama, $email, $password);
if($mahasiswa->validasi ()){//kalau mahasiswa tervalidasi   
$mahasiswa->tampilbiodata();
}


