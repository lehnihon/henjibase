<?php
get_header(); 
?>
<div id="page">
  <div id="titulo-topo" class="titulo-topo p-md-4 p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Fale Conosco</h1>
          <h5>Preencha o Formulário e envie para a gente</h5>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part( 'content', 'breadcrumb' ); ?>

  <div class="page-contato">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-12 form-group">
              <label for="formcontato1">Nome</label>
              <input type="text" name="" class="form-control" id="formcontato1">
            </div>
            <div class="col-12 form-group">
              <label for="formcontato2">E-mail</label>
              <input type="text" name="" class="form-control" id="formcontato2">
            </div>
            <div class="col-12 form-group">
              <label for="formcontato3">Telefone</label>
              <input type="text" name="" class="form-control" id="formcontato3">
            </div>
            <div class="col-12 form-group">
              <label for="formcontato4">Cidade</label>
              <input type="text" name="" class="form-control" id="formcontato4">
            </div>
            <div class="col-12 form-group">
              <label for="formcontato5">Diga-nos como podemos te ajudar</label>
              <textarea class="form-control" id="formcontato5" rows="6"></textarea>
            </div>
            <div class="col-12 form-group">
              <input type="submit" class="btn-selecionar" value="Enviar">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.315593493596!2d-46.56454718440494!3d-23.664669371302054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4231ede2d409%3A0xd05a0c67d84d68db!2sHenji+Inform%C3%A1tica!5e0!3m2!1spt-BR!2sbr!4v1564743981954!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <p class='mt-3'>
              Central de Reservas 24h<br>
              <span class='tel-big'>11 4330-6153</span>
          </p>
          <p>
              Central de Reservas 24h (sinistros, furtos, roubo)<br>
              <span class='tel-big'>11 4330-6153</span>
          </p>
          <p>
               Serviço de Atendimento ao Cliente<br>
              <span class='tel-big'>11 4330-6153</span>
          </p>
        </div>
      </div>
      <?php get_template_part( 'content', 'redes' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
