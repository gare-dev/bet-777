<?php
$host = 'localhost';
$user = 'root'; 
$password = '4dMinForTheD4t4B4s3'; 
$dataBase = 'loginRegisterDb'; 
$conn = new mysqli($host, $user, $password, $dataBase);


if($conn->connect_error){

    die("Connection failed: " . $conn->connect_error);
}

$login_found = false;

if($_SERVER["REQUEST_METHOD"] == "GET"){

    $login = $_GET['logintxt'];
    $password = $_GET['senha'];
    
    $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        $login_found = true;
        echo "Teste";

    }
    else if(!$login_found || $_SERVER["REQUEST_METHOD"] != "GET") {
        echo "<script>";
        echo "window.location = 'login.html';"
        echo "

        const textError = document.getElementById('div_error');
        textError.style.display = 'initial';"
        echo "</script>";
    }

}
$conn->close();

?>