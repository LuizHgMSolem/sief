<?php


if (!isset($_COOKIE["emailValido"]) && !isset($_COOKIE["senhaValida"])){  
  setcookie("emailValido", "Encerrado", time() - 3600, "/json-LoginValid/validacao");
  setcookie("senhaValida", "Encerrado", time() - 3600,"/json-LoginValid/validacao");
  unset($_SESSION['loginValido']);
  header("Location: ../../login.php");
  exit();
}
$inputInfo = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (isset($inputInfo['Logout'])) {
  setcookie("emailValido", "Encerrado", time() - 3600, "/json-LoginValid/validacao");
  setcookie("senhaValida", "Encerrado", time() - 3600,"/json-LoginValid/validacao");
  header("Location: ../../login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Animais Fantásticos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  <script>document.documentElement.className += ' js';</script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <nav class="menu js-menu">
    <ul>
      <li><a href="#animais">Animais</a></li>
      <li><a href="#faq">Faq</a></li>
      <li><a href="#contato">Contato</a></li>
      <li><a href="https://www.origamid.com/">Dev →</a></li>
      <form action="index.php" method="post">
        <label for="Logout" class="txtlogout">Logout</label>
        <input type="submit" name="Logout" id="Logout" value="Logout">
      </form>
    </ul>
  </nav>
  <section class="grid-section animais js-scroll" id="animais">
    <h1 class="titulo">Animais Fantásticos</h1>
    <ul class="animais-lista js-tabmenu">
      <li>
        <img src="img/imagem1.jpg">
      </li>
      <li>
        <img src="img/imagem2.jpg">
      </li>
      <li>
        <img src="img/imagem3.jpg">
      </li>
      <li>
        <img src="img/imagem4.jpg">
      </li>
      <li>
        <img src="img/imagem5.jpg">
      </li>
      <li>
        <img src="img/imagem6.jpg">
      </li>
    </ul>
    <div class="animais-descricao js-tabcontent">
      <section>
        <h2>Raposa</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
      
      <section>
        <h2>Esquilo</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
      <section>
        <h2>Urso</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
      <section>
        <h2>Lobo</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
      <section>
        <h2>Macaco</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
      <section>
        <h2>Leão</h2>
        <p>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados
          por um focinho comprido e uma cauda longa e peluda.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
        <p>De cerca de 40 espécies reconhecidas como raposas, somente 12 pertencem ao gênero Vulpes das "raposas verdadeiras", do
          qual a raposa vermelha é a mais comum.</p>
        <p>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</p>
      </section>
    </div>
  </section>

  <section class="grid-section faq js-scroll" id="faq">
    <h1 class="titulo">FAQ</h1>
    <dl class="faq-lista js-accordion">
      <dt>Qual a idade dos animais?</dt>
      <dd>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados por um focinho comprido e uma cauda longa e peluda.</dd>
      <dt>Eles são fantásticos?</dt>
      <dd>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</dd>
      <dt>Qual a diferença?</dt>
      <dd>As raposas são animais mamíferos e onívoros pertencentes à família Canidae. São vulpídeos de porte médio, caracterizados por um focinho comprido e uma cauda longa e peluda.</dd>
      <dt>Como proteger?</dt>
      <dd>Também apresentam como particularidade suas pupilas ovais, semelhantes às pupilas verticais dos felídeos.</dd>
    </dl>
  </section>

  <section class="grid-section contato js-scroll" id="contato">
    <h1 class="titulo">Contato</h1>
    <div class="mapa">
      <img src="img/mapa.png">
    </div>
    <ul class="dados">
      <li>contato@origamid.com</li>
      <li>+55 (21) 9999-9999</li>
      <li>Rua do Conde, nº 21</li>
      <li>Rio de Janeiro - RJ</li>
    </ul>
  </section>

  <footer class="copy">
    <p>Todos os direitos reservados.</p>
  </footer>

  <script src="script.js"></script>  
</body>
</html>