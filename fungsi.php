<?php
$conn = mysqli_connect("localhost","root","","db_lambda_design");

function register($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["pass"]);
    $password2 = mysqli_real_escape_string($conn, $data["pass2"]);
    $tlp = mysqli_real_escape_string($conn, $data["tlp"]);
    $result = mysqli_query($conn, "SELECT username FROM reg_user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Username sudah terdaftar!');</script>";
        return false;
    }

    if($password !== $password2){
        echo "<script>alert('konfirmasi password salah!');</script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO reg_user VALUES('', '$username', '$password', '$email', '$tlp')");

    return mysqli_affected_rows($conn);
}

function kode($data){
    global $conn;

    $user = mysqli_real_escape_string($conn, $data["user"]);
    $kode = mysqli_real_escape_string($conn, $data["kda"]);
    $result = mysqli_query($conn, "SELECT User FROM sup_admin WHERE User = '$user'");

    $kode1 = password_hash($kode, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO sup_admin VALUES('','$user','$kode1')");

    return mysqli_affected_rows($conn);
}

function hapus_user($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM reg_user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapus_produk($id2){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id2");

    return mysqli_affected_rows($conn);
}
?>