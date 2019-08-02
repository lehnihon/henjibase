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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<?php wp_head(); ?>
<?php
$client = new SoapClient('http://www.henjiweb.com.br/Webservice/wsReserva.asmx?WSDL');
$params = array(
  "pUsuario" => "reserva",
  "pSenha" => "r3s3rva&2019"
);
  
$response = $client->__soapCall("GetListagemLojas", array($params));
$xml = simplexml_load_string($response->GetListagemLojasResult->any);
$lojas = $xml->NewDataSet->Lojas;
?>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>
<form id="header" action="<?php echo home_url( '/central-de-reserva' ); ?>" method="POST">
  <div class="menu-topo py-1">
    <div class="container">
      <div class="row">
          <div class="col-12">
            <span class="pr-3">Central de Reservas  11 4330-6153</span> <a href="#"><i class="fas fa-play"></i></a> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
          </div> 
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row menu-principal py-md-3 py-1">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-md navbar-dark">
          <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
            <img width="200" class="img-fluid e-claro logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.png"; ?>" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ml-auto navbar-nav">
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="<?php echo home_url( '/' ); ?>">Início</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="<?php echo home_url( '/a-empresa' ); ?>">Empresa</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="<?php echo home_url( '/frota' ); ?>">Frota</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="#">Ofertas</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="<?php echo home_url( '/fale-conosco' ); ?>">Atendimento</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="#">Login</a>
              </li>
              <li class="nav-item text-center">
                <a class="nav-link px-md-3" href="#">Cadastre-se</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="menu-alugue">
    <div class="container">
      <div class="row pt-3 pb-md-4 p-1">
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
                <input type="text" name="dtretirada" value="<?php echo (!empty($_POST['dtretirada']))? $_POST['dtretirada'] : date('d/m/Y'); ?>" class="form-control date">
                <div class="input-group-append">
                  <div class="input-group-text"><i class="fas fa-table"></i></div>
                </div>
              </div>
            </div>
            <div class="col-6 mb-1">
              <div class="input-group">
                <input type="text" name="hrretirada" value="<?php echo (!empty($_POST['hrretirada']))? $_POST['hrretirada'] : '10:00'; ?>" class="form-control time">
                <div class="input-group-append">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input <?php if(!empty($_POST['lcretorno'])) echo "checked"; ?> class="form-check-input" type="checkbox" id="form-dev">
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
                <input type="text" name="dtretorno" value="<?php echo (!empty($_POST['dtretorno']))? $_POST['dtretorno'] : date('d/m/Y'); ?>" class="form-control date">
                <div class="input-group-append">
                  <div class="input-group-text"><i class="fas fa-table"></i></div>
                </div>
              </div>
            </div>
            <div class="col-6 mb-1">
              <div class="input-group">
                <input type="text" name="hrretorno" value="<?php echo (!empty($_POST['hrretorno']))? $_POST['hrretorno'] : '10:00'; ?>" class="form-control time">
                <div class="input-group-append">
                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href="<?php echo home_url( '' ); ?>" class="mr-3">Nova Reserva</a>
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
              <select name="lcretirada" class="form-control">
                <option value="0">Selecione</option>
                <?php
                foreach($lojas as $val){

                  if($_POST['lcretirada'] == $val->Id_Loja){
                    echo "<option selected value ='{$val->Id_Loja}'>{$val->Nome} | {$val->Endereco}</option>";
                  }else{
                    echo "<option value ='{$val->Id_Loja}'>{$val->Nome} | {$val->Endereco}</option>";
                  }
                  
                }
                ?>
              </select>
                <div class="input-group-append">
                  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-1 mt-3 local-dev">
              Selecione o Local de Devolução
            </div>
            <div class="col-12 local-dev">
              <div class="input-group">
              <select name="lcretorno" class="form-control">
                <option value="0">Selecione</option>
                <?php
                foreach($lojas as $val){
                  if($_POST['lcretorno'] == $val->Id_Loja){
                    echo "<option selected value ='{$val->Id_Loja}'>{$val->Nome} | {$val->Endereco}</option>";
                  }else{
                    echo "<option value ='{$val->Id_Loja}'>{$val->Nome} | {$val->Endereco}</option>";
                  }
                }
                ?>
              </select>
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
</form>

