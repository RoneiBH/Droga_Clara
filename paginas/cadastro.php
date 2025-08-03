<h1>Cadastro</h1>

<form action="processa_cadastro.php" method="post" style="
    background-color: #fff;
    padding: 30px;
    width: 100%;
    max-width: 500px;
    border-radius: 5px;
    box-shadow: 0 2px 15px rgba(0, 31, 205, 0.92);
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1px;
">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="matricula">Matrícula:</label>
    <input type="number" id="matricula" name="matricula" required>

    <label for="telefone">Celular:</label>
    <input type="number" id="telefone" name="telefone" required>

    <label for="cargo">Cargo:</label>
    <input type="text" id="cargo" name="cargo" required>

    <label for="loja">Loja:</label>
    <input type="text" id="loja" name="loja" required>

    <input type="submit" value="Cadastrar">
</form>

<p style="text-align:center; margin-top:20px;">
    <a href="index.php">Voltar</a>
</p>
