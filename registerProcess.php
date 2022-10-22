<?php
include("koneksi.php");
include("caesar.php");
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$password_salt = $password . $username;
// $passkey = substr($password, 2);
// $key = ((strlen($password)) + (strlen($username)) - 5);
$key = 4;
$text = $password_salt;
$passencryp = encrypt($text);
$sql = "INSERT INTO `customer` (`fullname`, `username`, `email`, `password`, `gender`) VALUES ('$fullname','$username','$email', '$passencryp', '$gender')";
echo ($sql);
if ($conn->query($sql) ==  TRUE) {
    header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
