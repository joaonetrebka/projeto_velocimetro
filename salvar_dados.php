
<?php

$host = "localhost";
$dbname = "velocidade";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

//RESTO
if (isset($_POST['rpm']) && isset($_POST['velocidade'])) {
    $rpm = $_POST['rpm'];
    $kph = $_POST['velocidade'];
    
    
} else {
    echo "Parâmetros incompletos enviados pela ESP";
}

$sql = "INSERT INTO dados (id, rpm, velocidade) VALUES (id, rpm, velocidade)";
$conn->close();
?>