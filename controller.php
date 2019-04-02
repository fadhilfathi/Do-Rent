<?php
	include "model.php";
	class controller{
		public $model;
		function __construct(){
			$this->model = new model();
        }
        
		function register(){
            $nama = $_POST['namaregist'];
			$username = $_POST['emailregist'];
			$password = $_POST['passwordregist'];
            $data = $this->model->SelectAllUser($username);
            $cek = mysqli_num_rows($data);
            if($cek > 0){
                echo "<script>document.location='welcome.php?ada=1';</script>";
            }
            $insert = $this->model->InsertUser($username, $nama, $password);
            echo "<script>
            alert('Daftar Berhasil');document.location='welcome.php?';</script>";
		}
        
        function login(){
            $username = $_POST['emaillogin'];
            $password = $_POST['passwordlogin'];
            $admin = "admin@admin.com";
            $data = $this->model->selectUser($username,$password);
            $cek = mysqli_num_rows($data);
            if ($cek > 0) {
                if ($username == $admin) {
                    echo "<script>
                    alert('Login Sebagai Admin');document.location='admin.php?';</script>";
                }
                session_start();
                $_SESSION['login'] = $username;
                echo "<script>
                alert('Login Berhasil');document.location='index.php?';</script>";
            }
            else{
                echo "<script>document.location='welcome.php?gagal=1';</script>";
            }
        }
        function editUser(){
            $id = $_SESSION['login'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = $this->model->UpdateUser($id, $username, $password);
            echo "<script>
            alert('Edit Berhasil');document.location='profile.php?';</script>";
        }
        function tambahstock(){
            $id = $_POST['id'];
            $jumlah = $_POST['jumlah'];
            $data = $this->model->SelectBarang($id);
            $cek = mysqli_fetch_array($data);
            $jumlah0 = $cek['jumlah'];
            $jumlah2 = $jumlah0 + $jumlah;
            $query = $this->model->UpdateJumlahBarang($id, $jumlah);
            echo "<script>
            alert('Edit Berhasil');document.location='admin.php?';</script>";
        }
        function gantiharga(){
            $id = $_POST['id'];
            $harga = $_POST['harga'];
            $query = $this->model->UpdateHargaBarang($id, $harga);
            echo "<script>
            alert('Edit Berhasil');document.location='admin.php?';</script>";
        }
        function admin(){
            $AllBarang = $this->model->SelectAllBarang();
            $AllPesan = $this->model->SelectAllPesan();
        }
		function __destruct(){
		}
	}
?>