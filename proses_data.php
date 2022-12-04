<?php 
include('koneksi.php');
$koneksi = new dbh();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['judul'],$_POST['author']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['judul'],$_POST['author'],$_POST['id']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampil.php');
}
?>