<?php
require '../fungsi.php';
$id = $_GET['id'];

if (hapus_produk($id) > 0){
    echo "<script>alert('Produk Berhasil dihapus!');document.location='sup-admin.php?action=back';</script>";
}else{
    echo "<script>alert('Produk gagal dihapus!');document.location='sup-admin.php?action=back';</script>";
}
?>