<div id="box-account-login" class="box">
  <h2><?php echo language::translate('title_sign_in_EC', 'Iniciar Sesion'); ?></h2>

  <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login')); ?>
    <?php echo functions::form_draw_hidden_field('redirect_url', !empty($_GET['redirect_url']) ? $_GET['redirect_url'] : document::ilink('')); ?>

    <div class="form-group">
      <?php echo functions::form_draw_email_field('email', true, 'required="required" placeholder="'. language::translate('title_email_address_EC', 'Correo Electronico') .'"'); ?>
    </div>

    <div class="form-group">
      <?php echo functions::form_draw_password_field('password', '', 'placeholder="'. language::translate('title_password_EC', 'Contraseña') .'"'); ?>
    </div>

    <div class="btn-group btn-block">
      <?php echo functions::form_draw_button('login', language::translate('title_sign_in_EC', 'Iniciar Sesion')); ?>
    </div>

    <p class="text-center"><a href="<?php echo document::href_ilink('create_account'); ?>"><?php echo language::translate('text_new_customers_click_here_EC', 'Nuevos clientes click aqui'); ?></a></p>

  <?php echo functions::form_draw_form_end(); ?>
</div>
