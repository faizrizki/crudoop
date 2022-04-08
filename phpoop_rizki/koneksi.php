<?php
class database
{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "pendaftaranoop";
    var $koneksi = "";
    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tbl_pendaftaran");
        // while ($row = mysqli_fetch_array($data)) {
        //     $hasil[] = $row;
        return $data;
    }


    function tambah_data($nama, $tempat_lahir, $tanggal_lahir, $warga_negara, $alamat, $email, $no_hp, $asal_smp, $nama_ayah, $nama_ibu, $penghasilan_ortu)
    {
        mysqli_query($this->koneksi, "INSERT INTO tbl_pendaftaran VALUES ('','$nama','$tempat_lahir','$tanggal_lahir','$warga_negara','$alamat','$email','$no_hp','$asal_smp','$nama_ayah','$nama_ibu','$penghasilan_ortu')");
    }

    function get_by_id($id)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM tbl_pendaftaran WHERE id='$id'");
        return $query->fetch_array();
    }


    function update_data($nama, $tempat_lahir, $tanggal_lahir, $warga_negara, $alamat, $email, $no_hp, $asal_smp, $nama_ayah, $nama_ibu, $penghasilan_ortu, $id)
    {
        $query = mysqli_query($this->koneksi, "UPDATE tbl_pendaftaran SET nama='$nama',tempatlahir='$tempat_lahir',tanggallahir='$tanggal_lahir',warganegara='$warga_negara',alamat=$alamat,email='$email',nohp='$no_hp',asalsmp='$asal_smp',namaayah='$nama_ayah',namaibu='$nama_ibu',penghasilanortu='$penghasilan_ortu' WHERE id='$id'");
    }

    function delete_data($id)
    {
        $query = mysqli_query($this->koneksi, "DELETE FROM tbl_pendaftaran WHERE id='$id'");
    }
}
