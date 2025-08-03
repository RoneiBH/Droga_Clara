<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo</title>
</head>
<style>

img {
    width: 80px;
    height: auto;
    display: block;
    margin: 0 auto;
}

h1 {
    text-align: center;
    font-family: Arial, sans-serif;
    color: #333;
}

p{
    text-align: center;
    font-family: Arial, sans-serif;
    color: blue;
    font-size: 12px; 
        
}

table {
    width: 80%;
    margin: 10px auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #f5f3f3;
    border-radius: 8px;
    overflow: hidden;
    margin-top: 10px;
    margin-bottom: 5px;
    border: 1px solid #e80505;
    
}

tr, th, td {
    border: 2px solid #2003fd;
    padding: 9px;
    width: 100px;
    text-align: center;
    font-family: Arial, sans-serif;
}

button{
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>

<body>
    <h1>Funcionários da Loja 01</h1>
    <img src="/img/logo droga clara.png" alt="Logo Droga Clara">
    <p>Droga Clara</p>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Função</th>
            <th>Loja</th>
            <th>Situação</th>
            <th>Selecionar</th>
        </tr>
        <tr>
            <td>123456</td>
            <td>João Silva</td>
            <td>Atendente</td>
            <td>Loja 1</td>
            <td>Ativo</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>654321</td>
            <td>Maria Oliveira</td>
            <td>Farmacêutica</td>
            <td>Loja 1</td>
            <td>Férias</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>789012</td>
            <td>Luiz Silva</td>
            <td>Atendente</td>
            <td>Loja 1</td>
            <td>Ativo</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>345678</td>
            <td>Pedro Oliveira</td>
            <td>Farmacêutica</td>
            <td>Loja 1</td>
            <td>Ativo</td>
            <td><input type="checkbox"></td>

        </tr>
        <tr>
            <td>456789</td>
            <td>Julia Bastos</td>
            <td>Atendente</td>
            <td>Loja 1</td>
            <td>Ativo</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>567890</td>
            <td>Ronei Pereira</td>
            <td>Farmacêutica</td>
            <td>Loja 1</td>
            <td>Ativo</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>678901</td>
            <td>Welligton Silva</td>
            <td>Atendente</td>
            <td>Loja 1</td>
            <td>Afastado </td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>789012</td>
            <td>Thais Moura</td>
            <td>Farmacêutica</td>
            <td>Loja 1</td>
            <td>Desligado</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>890123</td>
            <td>Angela Gomes</td>
            <td>Atendente</td>
            <td>Loja 1</td>
            <td>Transf.loja 4</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>901234</td>
            <td>José Carlos</td>
            <td>Farmacêutica</td>
            <td>Loja 1</td>
            <td>Experiência</td>
            <td><input type="checkbox"></td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
    </table>

    <button>imprimir</button>
    
</body>
</html>