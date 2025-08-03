    // Atestados
  new Chart(document.getElementById("chartAtestados"), {
    type: 'bar',
    data: {
      labels: ["Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
      datasets: [{
        label: 'Atestados',
        backgroundColor: 'red',
        data: [10, 13, 17, 15, 14, 20]
      }]
    }
  });

  // Banco de horas
  new Chart(document.getElementById("chartBancoHoras"), {
    type: 'horizontalBar',
    data: {
      labels: ["Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
      datasets: [{
        label: 'Banco de Horas',
        backgroundColor: 'blue',
        data: [10, 7, 18, 20, 15, 25]
      }]
    }
  });

  // Férias agendadas
  new Chart(document.getElementById("chartFerias"), {
    type: 'horizontalBar',
    data: {
      labels: ["Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
      datasets: [{
        label: 'Férias',
        backgroundColor: 'crimson',
        data: [4, 1, 0, 3, 0, 4]
      }]
    }
  });


  function mostrarPagina(nome) {
    const paginas = document.querySelectorAll('.main-content > div');
    paginas.forEach(p => p.style.display = 'none');

    const paginaAtiva = document.getElementById('pagina-' + nome);
    if (paginaAtiva) {
      paginaAtiva.style.display = 'block';
    }
  }
