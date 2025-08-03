  <?php
  $nome = "Ronei";
  $data = date("d/m/Y");
  $diaSemana = date("l", strtotime("2025-07-20"));
  $diaSemanaTraduzido = [

  "Sunday" => "Domingo", "Monday" => "Segunda", "Tuesday" => "Terça",
      "Wednesday" => "Quarta", "Thursday" => "Quinta", "Friday" => "Sexta",
      "Saturday" => "Sábado"
  ][$diaSemana];

  ?>
  
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard Administrativo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/tela_principal.css">
    <script src="charts/chart.min.js"></script>
  </head>

  <body>
    <div class="container">
      <aside class="sidebar">
        <div class="greeting">
          <p><strong>Bom dia, <?= $nome ?>!</strong></p>
          <p><?= $data ?> <?= $diaSemanaTraduzido ?></p>
        </div>
  <nav>
    <a href="index.php?pagina=inicio"><button>Início</button></a>
    <a href="index.php?pagina=cadastro"><button>Funcionários</button></a>
    <a href="index.php?pagina=ferias"><button>Férias</button></a>
    <a href="index.php?pagina=escala"><button>Escala</button></a>
    <a href="index.php?pagina=atestado"><button>Atestado</button></a>
    <a href="index.php?pagina=banco"><button>Banco de horas</button></a>
    <a href="index.php?pagina=chamados"><button>Chamados</button></a>
    <a href="index.php?pagina=feedback"><button>Feedback</button></a>
    <a href="index.php?pagina=mensagens"><button>Mensagens</button></a>
    
  </nav>

  </aside>

  </main>

  </body>
  </html>
