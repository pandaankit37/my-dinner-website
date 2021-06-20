<?php
include "koneksi.php";
if(isset($_POST[''])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $phone = $_POST['phone'];
    $menu = $_POST['menu'];
    $alamat = $_POST['alamat'];

    $simpan = "INSERT INTO order(nama_lengkap, phone, menu, alamat)
                VALUE('$nama_lengkap', $phone, $menu, $alamat)";
    
    $result = mysqli_query($conn, $simpan);

    if($result){
        echo "<script>alert('Data Disimpan');windows.location='index.html'</script>";
    }
}
?>