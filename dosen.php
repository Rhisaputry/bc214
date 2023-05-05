<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="formulir.php">Mahasiswa</a></li>
  <li><a class="active" href="dosen.php">Dosen</a></li>
  <li><a href="jadwal.php">Jadwal Kuliah</a></li>

</ul> 
<br>
<h1>Data Dosen</h1>
<table>
    <tr>
        <td>NIDN</td>
        <td>:</td>
        <td><input type="number " name="nidn"></td>
    </tr>
    <tr>
        <td>Nama Dosen</td>
        <td>:</td>
        <td><input type="text " name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>No. HP</td>
        <td>:</td>
        <td><input type="text" name="nohp"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="simpan"></td>
    </tr>
</table>

</body>
</html>