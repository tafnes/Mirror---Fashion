<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 320px)">
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" type="text/css" href="css/rodape.css">
    	<title>Mirror Fashion</title>
    	<meta charset="utf-8"/>
  </head>
  <body>
     <header class="container" >
        <h1>
          <img src="img/logo.png" alt="Mirror Fashion">
        </h1>

        <p class="sacola">
          Nenhum item na sacola de compras
        </p>

        <nav class="menu-opcoes">
          <ul>
            <li><a href="#">Sua Conta</a></li>
            <li><a href="#">Lista de Desejos</a></li>
            <li><a href="#">Cartão Fidelidade</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
          </ul>
        </nav>
     </header>
     <div class="container destaques">

      <section class="busca">
        <h2>Busca</h2>

        <form action="http://www.google.com.br/search" id="form-busca">

          <input type="search" name="q" id="q">
          <input type="image" src="img/busca.png">
        </form>
      </section><!-- fim .busca -->
      <section class="menu-departamentos">
        <h2>Departamentos</h2>

         <nav>
          <ul>
            <li>
            <a href="#">Blusas e Camisas</a>
            <ul>
              <li><a href="#">Manga Curta</a></li>
              <li><a href="#">Manga Comprida</a></li>
              <li><a href="#">Camisa Social</a></li>
              <li><a href="#">Camisa Casual</a></li>
          </ul>
          </li>
            <li><a href="#">Calcas</a></li>
            <li><a href="#">Saias</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Sapatos</a></li>
            <li><a href="#">Bolsas e Carteiras</a></li>
            <li><a href="#">Acessorios</a></li>
          </ul>
        </nav>
      </section><!-- fim .menu-departamentos -->

      <div class="destaque ">
        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
        <a href="#" class="pause"></a>
      </div>
    </div><!-- fim .container .destaque -->

    <div class="container paineis">
      <!--os paineis de novidades e mais vendidos entrarão aqui dentro -->
      <section class="painel novidades">
        <h2>Novidades</h2>
        <ol>
          
          <!-- primeiro produto -->
          <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>

        <!--coloque mais produtos aqui -->
        <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
            </figure>
          </a>
        </li>
        </ol>
      </section>
      <section class="painel mais-vendidos">
        <h2>Mais Vendidos</h2>
        <ol>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png">
              <figcaption>Camiseta por R$49,90</figcaption>
              </figure>
            </a>
          </li>
        </ol>
      </section>
    </div>
    <footer>
     <div class="container">
        <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
        <ul class="social">
          <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
          <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
          <li><a href="http://plus.google.com/mirrorfashion">Google</a></li>
        </ul>
      </div>
    </footer>
    <script src="js/home.js"></script>
    <script type="text/javascript" src="js/destaque.js"></script>
  </body>
</html>


