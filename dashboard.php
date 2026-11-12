<?php include 'fungsi.php';?>

<h2>Dashboard Ekstrakurikuler</h2>
<a href="index.php">Keluar</a>

<hr>

<h3>Tambah Data Baru</h3>
<form action="fungsi.php" method="POST">
    <input type="hidden" name="aksi" value="tambah">
    <p>Guru Pembina: <input type="text" name="guru" required></p>
    <p>Ekskul 1: <input type="text" name="eskul1" required></p>
    <p>Ekskul 2: <input type="text" name="eskul2" required></p>
    <input type="submit" value="SIMPAN DATA">
</form>
<hr>
<h3>Daftar Ekskul</h3>
<table border="1" cellspacing="0" cellpadding="10">
    <tr bgcolor="#eee">
        <th>Guru Pembina</th> 
        <th>Ekskul 1</th>
        <th>Ekskul 2</th>
    </tr>
    <?php 
    $ambil_data = tampil();
    while($row = mysqli_fetch_assoc($ambil_data)){
    ?>
    <tr>
        <td><?php echo $row['Guru Pembina']; ?></td>
        <td><?php echo $row['Eksul_1']; ?></td>
        <td><?php echo $row['Eksul_2']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id_eskul']; ?>">Ganti</a> |
            <a href="hapus.php?id=<?= $row['id_eskul']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php
}
            ?>
</table>