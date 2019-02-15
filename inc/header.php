<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meliponário</title>
    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Base de todas as páginas -->
    <link href="css/base.css" rel="stylesheet">
    <!-- CSS da página atual -->
    <link href="css/ARQUIVO_CSS_PAGINA.css" rel="stylesheet">

	<!-- Fontes -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0&appId=197592364040011&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Menu Superior -->
    <div id="menu-superior">
    	<nav class="navbar navbar-inverse">
            <div class="container">
                <!-- header -->
                <div class="navbar-header">

                    <!-- botao toggle -->
                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#barra-navegacao">
                        <span class="sr-only">alternar navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a href="index.php" class="navbar-brand">
                        <img class="logo-menu img-responsive" src="img/logo-menu.jpg" alt="Meliponário">
                    </a>
                </div>

                <!-- navbar -->
                <div class="collapse navbar-collapse" id="barra-navegacao">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">As Melíponas</a></li>
                        <li><a href="sobre.php">Sobre o Meliponário</a></li>
                        <li><a href="galeria.php">Galeria</a></li>
                        <li><a href="contato.php">Conheça Nossos Serviços</a></li>
                    </ul>
                </div>
            </div><!-- /container -->
        </nav><!-- /nav -->
    </div>
