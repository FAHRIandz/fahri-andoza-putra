<!DOCTYPE html>
<html>
<head>
    <title>Output Data Mahasiswa</title>
</head>
<body bgcolor="#87CEEB">
    <h2 align="center">Data Mahasiswa</h2>
    <h3 align="center">Universitas Komputer Indonesia</h3>
    <table align="center" cellpadding="5" cellspacing="0">
        <tr>
            <td>NIM</td>
            <td><?php echo $_POST["nim"]; ?></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["jk"]; ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><?php echo $_POST["agama"]; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $_POST["status"]; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><?php echo $_POST["jurusan"]; ?></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td><?php echo $_POST["komentar"]; ?></td>
        </tr>
    </table>
</body>
</html>