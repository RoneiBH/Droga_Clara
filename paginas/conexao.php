<?php
// conexao.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "droga_clara";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<h2>Seção de Atestados</h2>
<p>Aqui vai o conteúdo relacionado a atestados.</p>
