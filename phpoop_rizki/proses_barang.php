<?php
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data($_POST['nama'], $_POST['tempatlahir'], $_POST['tanggallahir'], $_POST['warganegara'], $_POST['alamat'], $_POST['email'], $_POST['nohp'], $_POST['asalsmp'], $_POST['namaayah'], $_POST['namaibu'], $_POST['penghasilanortu']);
    header('location:tampil_data.php');
} elseif ($action == "update") {
    $koneksi->update_data($_POST['nama'], $_POST['tempatlahir'], $_POST['tanggallahir'], $_POST['warganegara'], $_POST['alamat'], $_POST['email'], $_POST['nohp'], $_POST['asalsmp'], $_POST['namaayah'], $_POST['namaibu'], $_POST['penghasilanortu'], $_POST['id']);
    header('location:tampil_data.php');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_data($id);
    header('location:tampil_data.php');
}
