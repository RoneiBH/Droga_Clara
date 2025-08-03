<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_principal.css">
    <title>Login e senha</title>
</head>



<style>
    /* tela_principal.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

h1 {
    color: #cf2b2b;
    margin-bottom: 10px;
    text-align: center;
}

img {
    width: 150px;
    margin-bottom: 30px;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"],
select {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    width: 100%;
}

button {
    background-color: #cf2b2b;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    
    background-color: #a82020;
}

img{
    width: 100px;
    margin-bottom: 30px;
}

.pulse {
            animation: pulse 1s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
             }
            50% {
                transform: scale(1.08);
            }
            100% {
                transform: scale(1);
            }
        }

        label{
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        p{
            color: blue;
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
         
        

</style>


<body>
    
    <h1>Droga Clara Administrativo</h1>
    
    <img src="../img/logo droga clara.png" alt="" class="pulse">
    

<form action="">
    
    <p style="white-space: nowrap; overflow: hidden; width: 100%; box-sizing: border-box;">
        <span style="display: inline-block; padding-left: 100%; animation: marquee 8s linear infinite;">
            O banco de dados está desabiltado no momento...
        </span>
    </p>
    <style>
    @keyframes marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }
    </style>

    <!-- <label for="">Digite a sua matricula</label><br> -->
    <!-- <input type="text" title="Matricula"> -->
    <br><br>
    
<!--     <label for="loja">Escolha a loja:</label><br> -->
    
    
<!--     <select id="loja" name="loja">

        <option value="">Selecione uma loja</option>
        <option value="loja1">Loja 1</option>
        <option value="loja2">Loja 2</option>
        <option value="loja3">Loja 3</option>
        <option value="loja4">Loja 4</option>
        <option value="loja5">Loja 5</option>
        <option value="loja6">Loja 6</option>
        <option value="loja7">Loja 7</option>
        <option value="loja8">Loja 8</option>
        <option value="loja9">Loja 9</option>

        </select> -->

    <br><br>

    <button type="button" onclick="window.location.href='../index.php'">Entrar</button>

</form>
<br><br>
<!-- <?php
setlocale(LC_TIME, 'pt_BR.UTF-8', 'pt_BR', 'Portuguese_Brazil.1252');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%d/%m/%Y - %A');
?> -->

</body>
</html>