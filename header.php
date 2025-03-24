<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    #menu{
        background: #133A41;
        display: flex;
        height: auto;
        width: 100vw;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
    }
    #logo img {max-width: 20vw; height: auto;}
    #text_buscar{
        border-radius: 50px;
        padding: 20px;
        height: 4vh; /* vh -> altera de acordo com a ALTURA da interface */
        width: 60vw; /* vw -> altera de acordo com a LARGURA da interface */
        border-style: none;
        background-image:url("./assets/imgs/icons/search.svg");
        background-repeat: no-repeat;
        background-position: right;
        background-size: 4vh;
      }
    #perfilicon{
          height:2.5rem;
          width:2.5rem;
          border-radius: 50%;
      }
    #carrinhoicon{
      margin-right: 5vw;
      height:2.5rem;
      width:2.5rem;
    }
    #carrinhoicon:hover, #perfilicon:hover{
      transition: 0.5s;
      height: 3rem;
      width: 3rem;
    }
        /* Versão Responsiva */
        @media (max-width: 768px) {
    #menu {
        flex-direction: row;
        align-items: center;
        justify-content:space-between;
        padding: 0; /* Adiciona um pouco de espaçamento entre os itens */
    }

    #logo img {
        max-width: 50vw; /* Ajusta o tamanho do logo */
        margin-bottom: 10px; /* Adiciona um espaço abaixo do logo */
    }

    #text_buscar {
        display: none;
    }

    #perfilicon, #carrinhoicon {
        height: 2.5rem; /* Aumenta o tamanho dos ícones para facilitar o toque */
        width: 2.5rem;
        margin: 5px; /* Adiciona um pequeno espaço entre os ícones */
    }

    #perfilicon:hover, #carrinhoicon:hover {
        height: 3rem; /* Aumenta o tamanho ao passar o mouse */
        width: 3rem;
    }

    #menu a {
        margin: 10px 0; /* Aumenta o espaçamento entre os ícones */
    }
}

  </style>
  <title>Home Page</title>
</head>
<body>
  <?php
  require_once './connection/connection.php';
    $perfil = "./user/perfil.php";
    $imagem = "./assets/imgs/icons/Group.svg";
    if (isset($_SESSION["loggedin"]) == true) {
      $imagem = "./uploads/".$_SESSION["idusuario"].".jpeg";
      if(isset($_SESSION["adm"]) == true){
        $perfil = "./adm/perfil.php";
      }
    }
  ?>
  <!-- MENU -->
  <header id="menu">
    <a href="./homepage.php" id="logo"><img src="./assets/imgs/logo/logo (2).jpg" alt="Logo Promel"></a>

    <form action="pesquisa.php" method="GET">
    <input id="text_buscar" type="search" name="query" placeholder="Buscar...">
    </form>

    <a href="<?=$perfil?>"><img src="<?=$imagem?>" alt="conta" id="perfilicon"></a> 
    <a href="./carrinho.php"><img src="./assets/imgs/icons/carrinho.svg" id="carrinhoicon"></a>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>