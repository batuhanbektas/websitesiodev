<?php
$email = $_POST['email'];
$password = $_POST['password'];

$expected_password = explode("@", $email)[0]; 

if ($password === $expected_password) {
    echo "<h2>Hoşgeldiniz $expected_password</h2>";
    echo "<p><a href='index.html'><button>Ana Sayfaya Git</button></a></p>";
} else {
    
    header("Location: login.html?error=1");
    exit();
}
?>