<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/tela_principal.css">

    <style>

        body { display: flex; margin: 0; }
        .menu { width: 250px; background-color: #0029c2; padding: 10px; }
        .menu button {
            display: block;
            width: 100%;
            padding: 15px;
            margin: 23px 0;
            border: none;
            background: white;
            border-radius: 15px;
            cursor: pointer;
        }
        .conteudo { flex: 1; padding: 20px; }
    </style>
</head>
<body>

<div class="menu">
    <div style="background: #cf2b2bff; color: white; padding: 15px; border-radius: 10px; text-align: center;">
        <strong>Ola, Supervisor!</strong><br>
        <?php
        setlocale(LC_TIME, 'pt_BR.UTF-8', 'pt_BR', 'Portuguese_Brazil.1252');
        date_default_timezone_set('America/Sao_Paulo');
        echo strftime('%d/%m/%Y - %A');
        ?>
    </div>

        <form method="get" action="">
            <button type="submit" name="pagina" value="inicio">Início</button>
            <button type="submit" name="pagina" value="cadastro">Funcionários</button>
            <button type="submit" name="pagina" value="ferias">Férias</button>
            <button type="submit" name="pagina" value="escala">Escala</button>
            <button type="submit" name="pagina" value="atestado">Atestado</button>
            <button type="submit" name="pagina" value="banco">Banco de horas</button>
            <button type="submit" name="pagina" value="chamados">Chamados</button>
            <button type="submit" name="pagina" value="feedback">Feedback</button>
            <button type="submit" name="pagina" value="mensagens">Mensagens</button>
        </form>
    </div>

    <div class="conteudo">
        <?php
            $pagina = $_GET['pagina'] ?? 'inicio';
            $arquivo = "paginas/$pagina.php";

            if (file_exists($arquivo)) {
                include $arquivo;
            } else {
                echo "<h2>Página não encontrada.</h2>";
            }
        ?>
    </div>

</body>
</html>
