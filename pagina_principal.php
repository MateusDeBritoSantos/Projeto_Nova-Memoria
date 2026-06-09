<?php require_once "acessibilidade.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nova Memória</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="assests/imagens/brain_onlyw.png" type="image/x-icon">
</head>
<body>
  <!-- barra lateral -->
  <aside>
    <nav>
      <ul>
        <li><a href="#" class="ativo">🧠Exercícios</a></li>
        <li><a href="desempenho.html">📊Desempenho</a></li>
        <li><a href="saude.html">📖Saúde do Cérebro</a></li>
        <li><a href="sobre.html">👥Sobre Nós</a></li>
        <li><a href="como_ajuda.html">❓Como os Jogos Ajudam</a></li>
        <li><a href="perfil.php">👤Perfil</a></li>
      </ul>
    </nav>
  </aside>  

  
  <main>
    <!-- Cabeçalho -->
    <header>
      <h1>Nova Memória</h1>
      <a href="#">Início</a>
    </header>

    <!-- Hero section -->
    <section id="hero">
      <h2>Aprimore sua mente</h2>
      <p>Através de minijogos melhore seu desenvolvimento cerebral</p>
      <button>Mais</button>
      <button>Começar</button>
    </section>

    <!-- Teste seu cérebro -->
    <section id="teste">
      <h2>Teste seu cérebro</h2>
      <p>Explore alguns exercícios e descubra qual é o seu nível cognitivo.</p>
      <button>Testar Agora</button>
      <div class="cards">
        <div class="card">
          <h3>Palavra Cruzada</h3>
          <p>Idade 65+</p>
        </div>
        <div class="card">
          <h3>Jogo da Memória</h3>
          <p>Idade 70+</p>
        </div>
        <div class="card">
          <h3>Quebra Cabeça</h3>
          <p>Idade 60+</p>
        </div>
      </div>
    </section>

    <!-- Fatos sobre o cérebro -->
    <section id="fatos">
        <h2>Fatos sobre o Cérebro</h2>
        <p>Fatos interessantes e dicas sobre a saúde do seu cérebro</p>
        <a href="saude.html"><button>Ler Mais</button></a>
    </section>

    <!-- Rodapé -->
    <footer>
      <p>© 2025 Nova Memória Development</p>
      <p>Contato</p>
      <ul>
        <li>isaac.peixoto1@fatec.sp.gov.br</li>
        <li>mateus.santos139@fatec.sp.gov.br</li>
      </ul>
    </footer>
  </main>
</body>
</html>
