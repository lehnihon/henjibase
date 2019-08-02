<?php
get_header(); 
$client = new SoapClient('http://www.henjiweb.com.br/Webservice/wsReserva.asmx?WSDL');
$dtretirada = $_POST['dtretirada'];
$hrretirada = $_POST['hrretirada'];
$dtretorno = $_POST['dtretorno'];
$hrretorno = $_POST['hrretorno'];
$lcretirada = $_POST['lcretirada'];
$lcretorno = $_POST['lcretorno'];
if(empty($lcretorno)){
  $lcretorno = $lcretirada;
}
$dtretirada_completa = DateTime::createFromFormat('d/m/Y', $dtretirada)->format('Y-m-d')."T$hrretirada:00";
$dtretorno_completa = DateTime::createFromFormat('d/m/Y', $dtretorno)->format('Y-m-d')."T$hrretorno:00";
$params = array(
  "pUsuario" => "reserva",
  "pSenha" => "r3s3rva&2019",
  "pDataRetirada" => $dtretirada_completa,
  "pDataRetorno" => $dtretorno_completa,
  "pIdLocalRetirada" => $lcretirada,
  "pIdLocalRetorno" => $lcretorno, 
  "pIdGrupoVeiculo" => 0
);
  
$response = $client->__soapCall("GetInformacoesTarifa", array($params));
$xml = simplexml_load_string($response->GetInformacoesTarifaResult->any);

$tarifas = $xml->NewDataSet->Tarifas;
$lojas = $xml->NewDataSet->Lojas;

function geraHtmlGrupo($tarifas){
  $grupo_veiculos = array();
  foreach($tarifas as $val){
    $index = $val->Id_GrupoVeiculo['0'];
    $grupo_veiculos["$index"][] = $val;
  }
  $topodias = true;
  ksort($grupo_veiculos);
  foreach($grupo_veiculos as $grupo){
    $topogrupo = true;
    foreach($grupo as $val){
      if($topodias){
        $html_grupos .= "
          <div class='veiculos-top'>
            Tarifa referente a locação de {$val->QtdeDias['0']}  dia(s)
          </div>
          ";
        $topodias = false;
      }
      if($topogrupo){
        $html_grupos .= "
          <div class='veiculos-grupo' data-id='{$val->Descricao['0']}'>
            <span class='triangulo-baixo show-{$val->Descricao['0']}'>&#9207;</span> <span class='hide-{$val->Descricao['0']} veiculos-hide triangulo-direita'>&#9205;</span> {$val->Descricao['0']} - {$val->Complemento['0']}
          </div>
          <div class='veiculos-detalhes show-{$val->Descricao['0']}'>
            <div class='row'>
              <div class='col-3 p-4'>
                <img class='img-fluid' src='{$val->UrlImagem['0']}' />
              </div>
              <div class='col-9'>
                <table class='table table-responsive'>
                  <thead>
                    <tr>
                      <th>Tarifa</th>
                      <th>Valor Diária</th>
                      <th>Franquia</th>
                      <th>KM Adc.</th>
                      <th>Proteção</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
          ";
        $topogrupo = false;
      }
      $html_grupos .= "
        <tr>
          <td>Balcão ".$val->Descricao['0']."</td>
          <td>R$".str_replace('.',',',$val->VlrDiaria['0'])."</td>
          <td>".$val->LimiteKm['0']."</td>
          <td>R$".str_replace('.',',',$val->VlrKmExcedente['0'])."</td>
          <td>R$".str_replace('.',',',$val->VlrProtecaoDiaria['0'])."</td>
          <td><a class='btn-veiculo' href='#'>Selecionar</a></td>
        </tr>
      ";
    }
    $html_grupos .= "
            </tbody>
          </table>
        </div>
      </div>
    </div>
    ";  
  }
  return $html_grupos;
}

function geraHtmlRetirada($lojas,$data,$hora){
  $html_retirada = '';
  foreach($lojas as $val){
    if($val->RetiradaDevolucao == 'R'){
    $html_retirada.="
      <p>
        {$val->Nome}<br>
        ENDEREÇO: <span>{$val->Endereco} {$val->Cidade} / {$val->Estado}</span><br>
        DATA: $data $hora
      </p>";
    }
  }
  return $html_retirada;
}
 
function geraHtmlRetorno($lojas,$data,$hora){
  $html_devolucao = '';
  foreach($lojas as $val){
    if($val->RetiradaDevolucao == 'D'){
    $html_devolucao.="
      <p>
        {$val->Nome}<br>
        ENDEREÇO: <span>{$val->Endereco} {$val->Cidade} / {$val->Estado} </span><br>
        DATA: $data $hora
      </p>";
    }
  }
  return $html_devolucao;
}

?>
<div id="page">
  <div id="titulo-topo" class="titulo-topo p-md-4 p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Central de Reserva</h1>
          <h5>Alugue um carro na Henji e aproveite ao máximo seu passeio!</h5>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part( 'content', 'breadcrumb' ); ?>

  <div class="page-reserva mb-5">
    <div class="container">
      <div class="row">
        <?php
        if(isset($xml->NewDataSet->Erros_Avisos->mensagem)){
          echo "<h2 class='error-msg text-center'>".$xml->NewDataSet->Erros_Avisos->mensagem[0]."</h2>";
        }else{
        ?>
        <div class="col-md-9">
          <?php echo geraHtmlGrupo($tarifas) ?>
        </div>
        <div class="col-md-3">
          <div class="reserva-top">
            Informações da Reserva
          </div>

          <div class="reserva-retirada">
            <strong>Informações da Retirada</strong>
            <?php echo geraHtmlRetirada($lojas,$dtretirada,$hrretirada) ?>
          </div>
          <div class="reserva-retorno">
            <strong>Informações do Retorno</strong>
            <?php echo geraHtmlRetorno($lojas,$dtretorno,$hrretorno) ?>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
