<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-icon.png"; ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
 <div id="header">
  <div class="container">
    <div class="row menu-principal py-md-3 py-1">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="#">
            <img width="200" class="img-fluid e-claro logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.png"; ?>" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-md-fill">
              <li class="nav-item flex-md-fill text-center">
                <a class="nav-link" href="#banner">A MARINA TROPICAL </a>
              </li>
              <li class="nav-item flex-md-fill text-center">
                <a class="nav-link" href="#servicos">SERVIÇOS</a>
              </li>
              <li class="nav-item flex-md-fill text-center">
                <a class="nav-link" href="#estrutura">FOTOS</a>
              </li>
              <li class="nav-item flex-md-fill text-center">
                <a class="nav-link" href="#localizacao">LOCALIZAÇÃO</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="row menu-alugue pt-3 pb-4">
      <div class="col-md-12">
        <h3>Alugue um carro</h3>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="row">
          <div class="col-12 mb-1">
            Data de Retirada
          </div>
          <div class="col-6 mb-1">
            <div class="input-group">
              <input type="text" class="form-control date">
              <div class="input-group-append">
                <div class="input-group-text"><i class="fas fa-table"></i></div>
              </div>
            </div>
          </div>
          <div class="col-6 mb-1">
            <div class="input-group">
              <input type="text" class="form-control time">
              <div class="input-group-append">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form-dev">
              <label class="form-check-label" for="form-dev">
                Devolução em local diferente
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <div class="row">
          <div class="col-12 mb-1">
            Data de Retorno
          </div>
          <div class="col-6 mb-1">
            <div class="input-group">
              <input type="text" class="form-control date">
              <div class="input-group-append">
                <div class="input-group-text"><i class="fas fa-table"></i></div>
              </div>
            </div>
          </div>
          <div class="col-6 mb-1">
            <div class="input-group">
              <input type="text" class="form-control time">
              <div class="input-group-append">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <a href="#" class="mr-3">Nova Reserva</a>
            <a href="#">Alterar/Cancelar Reserva</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3 mb-md-0">
        <div class="row">
          <div class="col-12 mb-1">
            Selecione o Local de Retirada
          </div>
          <div class="col-12">
            <div class="input-group">
              <input type="text" class="form-control">
              <div class="input-group-append">
                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1">
        <a class="mt-md-4 mt-0  buscar-reserva" href="#">Procurar</a>
      </div>
    </div>
  </div>
</div>

