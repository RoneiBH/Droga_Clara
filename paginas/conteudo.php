<?php
$pagina = $_GET['pagina'] ?? 'inicio';
$caminho = "paginas/$pagina.php";

if (file_exists($caminho)) {
    include $caminho;
} else {
    echo "<h2>Página não encontrada.</h2>";
}




$pagina = $_GET['pagina'] ?? 'inicio';

switch ($pagina) {
  case 'funcionarios':
    include 'paginas/cadastro_funcionario.php';
    break;
  case 'ferias':
    include 'paginas/ferias.php';
    break;
  case 'escala':
    include 'paginas/escala.php';
    break;
  case 'atestado':
    include 'paginas/atestado.php';
    break;
  case 'banco':
    include 'paginas/banco.php';
    break;
  case 'chamados':
    include 'paginas/chamados.php';
    break;
  case 'feedback':
    include 'paginas/feedback.php';
    break;
  case 'mensagens':
    include 'paginas/mensagens.php';
    break;
  default:
    include 'paginas/inicio.php';
    break;
}






?>
