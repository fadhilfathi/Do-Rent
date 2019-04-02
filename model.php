<?php
require 'koneksi.php';
class model extends Connection{
  function execute($query){
      $mysqli_query = mysqli_query(parent::__construct(),$query);
      mysqli_close(parent::__construct());
      return $mysqli_query;
  }
  function selectUser($username,$password){
    $query = "select * from user where email = '$username' and password = '$password'";
    return $this->execute($query);
  }
  function SelectAllUser($username){
    $query = "select * from user where email = '$username'";
    return $this->execute($query);
  }
  function InsertUser($email, $nama, $password){
    $query = "insert into user values ('$email', '$nama', '$password', 0)";
    return $this->execute($query);
  }
  function UpdateUser($id, $username, $password){
    $query = "update user set username='$username', password='$password' where username ='$id'";
    return $this->execute($query);
  }
  function SelectAllBarang(){
    $query = "select * from barang";
    return $this->execute($query);
  }
  function SelectBarang($id){
    $query = "select * from barang where id='$id'";
    return $this->execute($query);
  }
  function UpdateHargaBarang($id, $harga){
    $query = "update barang set harga='$harga' where id='$id'";
    return $this->excute($query);
  }
  function UpdateJumlahBarang($id, $jumlah){
    $query = "update barang set jumlah='$jumlah' where id='$id'";
  }
  function SelectAllPesan(){
    $query = "select * from pesan";
    return $this->excute($query);
  }
  function UpdateStatusPesan(){
    $query = "update pesan set status='$status' where id='$id'";
    return $this->execute($query);
  }
}
?>  