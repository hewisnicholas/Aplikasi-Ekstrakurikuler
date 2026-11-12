<?php
include "fungsi.php";

$id = $_POST['id'];
$guru = $_POST['guru'];
$ekskul1 = $_POST['ekskul1'];
$ekskul2 = $_POST['ekskul2'];

$query = "UPDATE ekstra SET
`Guru Pembina`='$guru',
Eksul_1='$ekskul1',
Eksul_2='$ekskul2'
WHERE id_eskul='$id'";

mysqli_query(db(),$query);
?>

<script>
alert("Data berhasil diubah!");
window.location="dashboard.php";
</script>