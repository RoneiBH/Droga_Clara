<?php

include 'conexao.php';
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $telefone = $_POST['telefone'];
    $cargo = $_POST['cargo'];
    $loja = $_POST['loja'];
    

    $sql = "INSERT INTO cadastro_funcionarios (nome, matricula, telefone, cargo, loja) VALUES ('$nome', '$matricula', '$telefone', '$cargo','$loja')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";

    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Método de requisição inválido.";
}

?>
<p><a href="cadastro_funcionario.php">Voltar</a></p>