<?php
    require_once('Connection.php');  

    $login = $_POST['login'];
    $password = $_POST['password_'];

    $wynik = mysqli_query($con, "SELECT * FROM login WHERE login='$login'");
    if (mysqli_num_rows($wynik) > 0) {
        header("Location: Sign-in.html");
    } else {
        $Add_Data = mysqli_query($con, "INSERT INTO login (login, password_) VALUES ('$login', '$password_')");
        header("Location: Log-in.html");
    }
?>