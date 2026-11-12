<?php
include 'fungsi.php';

$id = $_GET['id'];

mysqli_query(db(), "DELETE FROM ekstra WHERE id_eskul='$id'");
?>

<script>
alert("Data berhasil dihapus!");
window.location="dashboard.php";
</script>