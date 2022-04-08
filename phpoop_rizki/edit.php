<?php
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if (!is_null($id)) {
    $tbl_pendaftaran = $db->get_by_id($id);
} else {
    header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h3>Update Data</h3>
    <hr />
    <form method="post" action="proses_barang.php?action=update">
        <input type="hidden" name="id" value="<?php echo $tbl_pendaftaran['id']; ?>" />
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $tbl_pendaftaran['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>tempat lahir </td>
                <td>:</td>
                <td><input type="text" name="tempatlahir" value="<?php echo $tbl_pendaftaran['tempat_lahir']; ?>" /></td>
            </tr>
            <tr>
                <td>tanggal lahir </td>
                <td>:</td>
                <td><input type="date" name="tanggallahir" value="<?php echo $tbl_pendaftaran['tanggal_lahir']; ?>" /></td>
            </tr>
            <tr>
                <td>warga negara </td>
                <td>:</td>
                <td><input type="text" name="warganegara" value="<?php echo $tbl_pendaftaran['warga_negara']; ?>" /></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $tbl_pendaftaran['alamat']; ?>" /></td>
            </tr>
            <tr>
                <td>email </td>
                <td>:</td>
                <td><input type="email" name="email" value="<?php echo $tbl_pendaftaran['email']; ?>" /></td>
            </tr>
            <tr>
                <td>no hp </td>
                <td>:</td>
                <td><input type="text" name="nohp" value="<?php echo $tbl_pendaftaran['no_hp']; ?>" /></td>
            </tr>
            <tr>
                <td>asal smp </td>
                <td>:</td>
                <td><input type="text" name="asalsmp" value="<?php echo $tbl_pendaftaran['asal_smp']; ?>" /></td>
            </tr>
            <tr>
                <td>nama ayah </td>
                <td>:</td>
                <td><input type="text" name="namaayah" value="<?php echo $tbl_pendaftaran['nama_ayah']; ?>" /></td>
            </tr>
            <tr>
                <td>nama ibu </td>
                <td>:</td>
                <td><input type="text" name="namaibu" value="<?php echo $tbl_pendaftaran['nama_ibu']; ?>" /></td>
            </tr>
            <tr>
                <td>penghasilan ortu </td>
                <td>:</td>
                <td><input type="text" name="penghasilanortu" value="<?php echo $tbl_pendaftaran['penghasilan_ortu']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Update" /></td>
            </tr>
        </table>
    </form>
</body>

</html>