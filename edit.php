<?php
include "fungsi.php";

$id = $_GET['id'];

$query = mysqli_query(db(),"SELECT * FROM ekstra WHERE id_eskul='$id'");
$data = mysqli_fetch_array($query);
?>

<h2>Edit Data Ekskul</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $data['id_eskul']; ?>">

<label>Guru Pembina</label><br>
<input type="text" name="guru" value="<?= $data['Guru Pembina']; ?>"><br><br>

<label>Ekskul 1</label><br>
<input type="text" name="ekskul1" value="<?= $data['Eksul_1']; ?>"><br><br>

<label>Ekskul 2</label><br>
<input type="text" name="ekskul2" value="<?= $data['Eksul_2']; ?>"><br><br>

<input type="submit" value="UPDATE DATA">

</form>