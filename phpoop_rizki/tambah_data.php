<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h3>Tambah Data Barang</h3>
    <hr />
    <form method="post" action="proses_barang.php?action=add">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>tempat lahir </td>
                <td>:</td>
                <td><input type="text" name="tempatlahir" /></td>
            </tr>
            <tr>
                <td>tanggal lahir </td>
                <td>:</td>
                <td><input type="date" name="tanggallahir" /></td>
            </tr>
            <tr>
                <td>warga negara </td>
                <td>:</td>
                <td><input type="text" name="warganegara" /></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td>:</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>email </td>
                <td>:</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>no hp </td>
                <td>:</td>
                <td><input type="text" name="nohp" /></td>
            </tr>
            <tr>
                <td>asal smp </td>
                <td>:</td>
                <td><input type="text" name="asalsmp" /></td>
            </tr>
            <tr>
                <td>nama ayah </td>
                <td>:</td>
                <td><input type="text" name="namaayah" /></td>
            </tr>
            <tr>
                <td>nama ibu </td>
                <td>:</td>
                <td><input type="text" name="namaibu" /></td>
            </tr>
            <tr>
                <td>penghasilan ortu </td>
                <td>:</td>
                <td><input type="text" name="penghasilanortu" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Simpan" /></td>
            </tr>
        </table>
    </form>
</body>

</html>