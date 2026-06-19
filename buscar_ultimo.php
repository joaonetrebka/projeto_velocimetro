<?php

//CONEXAO
$host = "localhost";
$dbname = "velocidade";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
echo "Conexão realizada com sucesso!";

//RESTO

$sql = "SELECT velocidade FROM dados ORDER BY id DESC LIMIT 1"; 

$result = $conn->query($sql); 

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["velocidade" => round($row["velocidade"],1)]);

}

$sql = "SELECT rpm FROM dados ORDER BY id DESC LIMIT 1"; 

$result = $conn->query($sql); 

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["rpm" => round($row["rpm"],1)]);
}

$dados = [];

while ($row = $result->fetch_assoc()) {
    $dados[] = [
        "id" => $row["id"],
        "rpm" => $row["rpm"],
        "velocidade" => $row["velocidade"]
    ];
};

header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

$conn->close();

?>
