
<?php

$host = "localhost";
$dbname = "velocimetro";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (isset($_POST['velocidade']) && isset($_POST['rpm'])) {
    $vel = $_POST['velocidade'];
    $rpm = $_POST['rpm'];
    
    
} else {
    echo "Parâmetros incompletos enviados pela ESP";
}
// Implemente a instrução SQL INSERT aplicável para a persistência dos dados.


$conn->close();
?>