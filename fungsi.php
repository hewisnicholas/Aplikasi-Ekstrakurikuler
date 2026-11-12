<?php

function db(){
    $koneksi = mysqli_connect("localhost", "root", "root", "eskulll");
    return $koneksi;
}


function tambah($guru, $ekskul1, $ekskul2){
    $query = "INSERT INTO ekstra VALUES (NULL,'$guru', '$ekskul1', '$ekskul2')";
    var_dump($query);
    mysqli_query(db(), $query);
    echo "<script>
    alert('Data Berhasil Disimpan!'); 
    window.location='dashboard.php';
    </script>";
}

function tampil(){
    $query = "SELECT * FROM ekstra";
    return mysqli_query(db(), $query);
}


if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "tambah"){
        tambah($_POST['guru'], $_POST['eskul1'], $_POST['eskul2']);
    }
}
?>