<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pequeno negócio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link 
      rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
      crossorigin="anonymous">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand"> <i class="fa-solid fa-pizza-slice fa-beat"> </i> Pizzaria </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alternar navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- Menu principal -->
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>  
            </li>

            <!-- Clientes -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="texto">
                Clientes 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
              </ul>
            </li>

            <!-- Pizzas -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="texto">
                Pizzas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-pizza">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-pizza">Listar</a></li>
              </ul>
            </li>

            <!-- Vendas -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="texto">
                Vendas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
              </ul>
            </li>

          <!-- Formulário de busca -->
          <form class="d-flex" role="search" style= "margin-left: 1200px;">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <?php
            include("config.php");
            switch(@$_REQUEST['page']){

              // Clientes
              case 'cadastrar-cliente':
                include("cadastrar-cliente.php");
              break;
              case 'listar-cliente':
                include("listar-cliente.php");
              break;
              case 'editar-cliente':
                include("editar-cliente.php");
              break;
              case 'salvar-cliente':
                include("salvar-cliente.php");
              break;

              // Pizzas
              case 'cadastrar-pizza':
                include("cadastrar-pizza.php");
              break;
              case 'listar-pizza':
                include("listar-pizza.php");
              break;
              case 'editar-pizza':
                include("editar-pizza.php");
              break;
              case 'salvar-pizza':
                include("salvar-pizza.php");
              break;

              // Vendas
              case 'cadastrar-venda':
                include("cadastrar-venda.php");
              break;
              case 'listar-venda':
                include("listar-venda.php");
              break;
              case 'editar-venda':
                include("editar-venda.php");
              break;
              case 'salvar-venda':
                include("salvar-venda.php");
              break;

              default:
                print "<h1>Bem-vindo a nossa Pizzaria 🍕</h1>";
                print '<div class="text-center">
                    <img src="steve.jpeg" alt="Pizza" class="img" style="max-width: 800px; margin-top: 150px;">
                </div>';

            }
          ?>
        </div>
      </div>
    </div>
    

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
      crossorigin="anonymous"></script>
  </body>
</html>
