<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template Animado</title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- STYLE SHEETS -->
    <?= css('assets/css/bootstrap.min.css') ?>
    <?= css('assets/css/roboto-fontface.css') ?>
    <?= css('assets/css/poncho.min.css') ?>
    <?= css('assets/css/font-awesome.min.css') ?>
    <?= css('assets/css/templates.css') ?>
    <?= css('assets/css/palta.css') ?>
</head>
<body>

  <header id="header">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Burger</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="#"><img src="<?= $site->image('logoMinisterio.png')->url() ?>" height="50" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EL MINISTERIO <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://www.produccion.gob.ar/institucional/mision/">MISIÓN</a></li>
                      <li><a href="http://www.produccion.gob.ar/institucional/el-ministro/">EL MINISTRO</a></li>
                      <li><a href="http://www.produccion.gob.ar/institucional/organigrama/">ORGANIGRAMA</a></li>
                      <li><a href="http://www.produccion.gob.ar/institucional/secretarias/secretaria-de-industria-2/">SECRETARIAS</a></li>
                      <li><a href="http://www.produccion.gob.ar/institucional/subsecretarias/secretaria-de-industria/">SUBSECRETARIAS</a></li>
                      <li><a href="http://www.produccion.gob.ar/casasdelaproduccion/">CASAS DE LA PRODUCCIÓN</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRÁMITES <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://www.produccion.gob.ar/guia-de-tramites/">TODOS</a></li>
                      <li><a href="http://www.produccion.gob.ar/tramites-de-pymes/">PYME</a></li>
                      <li><a href="http://www.produccion.gob.ar/tramites-de-emprendedores/">EMPRENDEDOR</a></li>
                      <li><a href="http://www.produccion.gob.ar/tramites-de-consumidor/">CONSUMIDOR</a></li>
                      <li><a href="http://www.produccion.gob.ar/tramites-comercio/">COMERCIO</a></li>
                      <li><a href="http://www.produccion.gob.ar/tramites-de-industria/">INDUSTRIA</a></li>
                      <li><a href="http://www.produccion.gob.ar/instituciones-productivas/">INSTITUCIONES</a></li>
                    </ul>
                  </li>
                    <li><a href="http://www.produccion.gob.ar/sala-de-prensa/comunicados/">SALA DE PRENSA</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </nav>
  </header>
