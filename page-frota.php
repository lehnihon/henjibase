<?php
get_header(); 
?>
<div id="page">
  <div id="titulo-topo" class="titulo-topo p-md-4 p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Nossa Frota</h1>
          <h5>Alugue um carro com na Henji e aproveite ao máximo seu passeio!</h5>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part( 'content', 'breadcrumb' ); ?>

  <div>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3>Conheça nossa Frota</h3>
          <p>
            As melhores opçoes pra você reservar e aproveitar
          </p>
        </div>
      </div>
      <div class="row pb-3">
        <div class="col-md-3 text-center mb-3">
          <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/carro1.jpg"; ?>" />
          <h3>Grupo A</h3>
          <p class="bigger">Fiat Mob ou similar</p>
          <a href="#" class="btn-selecionar">Selecionar</a>
        </div>
        <div class="col-md-3 text-center mb-3">
          <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/carro2.jpg"; ?>" />
          <h3>Grupo B</h3>
          <p class="bigger">HB20 ou smilar</p>
          <a href="#" class="btn-selecionar">Selecionar</a>
        </div>
        <div class="col-md-3 text-center mb-3">
          <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/carro3.jpg"; ?>" />
          <h3>Grupo C</h3>
          <p class="bigger">Fiat Strada ou similar</p>
          <a href="#" class="btn-selecionar">Selecionar</a>
        </div>
        <div class="col-md-3 text-center mb-3">
          <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/carro4.jpg"; ?>" />
          <h3>Grupo D</h3>
          <p class="bigger">Jeep Renegade ou Similar</p>
          <a href="#" class="btn-selecionar">Selecionar</a>
        </div>
      </div>
      <?php get_template_part( 'content', 'redes' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
