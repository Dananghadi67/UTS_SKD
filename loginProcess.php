<?php
include 'koneksi.php';
include 'caesar.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username;
$passencryp = encrypt($password_salt);

$data = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username' and password='$passencryp'");
//menghitung jumlah data yang ditemukan
if ($data->num_rows > 0) {
    $row = mysqli_fetch_assoc($data);
    session_start();
    $_SESSION["cust_id"] = $row['cust_id'];
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login berhasil');
    window.location.href='dash.php';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login gagal');
    window.location.href='login.php';
</script>");
}
