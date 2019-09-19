<?php
get_header('central'); 
?>

<!-- INICIO DA PÁGINA -->
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
        <div class="col-12">
          <div class="reserva-concluida px-2 py-2">
            <h4>Reserva Concluída!</h4>
            <p><strong>Número:</strong><?php echo $_GET['id'] ?></p>
            <p><strong>Status:</strong><?php echo $_GET['status'] ?></p>
            <p><strong>Veículo:</strong><?php echo $_GET['veiculo'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
