<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('img-fundo.jpg');
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat; 
            height: 100vh; 
            margin: 0; 
        }
        .navbar {
            margin-bottom: 20px; /* Adiciona espaço abaixo da barra de navegação */
        }

        .navbar-brand, .nav-link {
            margin-right: 10px; /* Adiciona espaçamento à direita nos itens de navegação */
        }

        label {
            color: white;
            font-size: 25px;
        }
        body {
            font-family: Verdana, sans-serif;
        }
        h1 {
            color: white;
            font-family: Verdana, sans-serif;
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Nunes Sport</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Adicionar Produto</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Produtos Cadastrados</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            </div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("adicionar-produto.php");
                    break;
                    case "listar":
                        include("listar-produtos.php");
                    break;
                    case "salvar":
                        include("salvar-produto.php");
                    break;
                    case "editar":
                        include("editar-produto.php");
                    break;
                    default:
                    print "<h1>Bem Vindos!</h1>";
                }
            ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
