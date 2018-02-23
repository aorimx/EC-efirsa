<div class="box-login" class="box">

  <h2 class="title"><?php echo language::translate('title_sign_in_EC', 'Iniciar sesion'); ?></h2>

  <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login'), false, 'style="width: 320px;"'); ?>
    <?php echo functions::form_draw_hidden_field('redirect_url', true); ?>

    <div class="form-group">
      <?php echo functions::form_draw_email_field('email', true, 'placeholder="'. language::translate('title_email_address_EC', 'Email') .'"'); ?>
    </div>

    <div class="form-group">
      <?php echo functions::form_draw_password_field('password', '', 'placeholder="'. language::translate('title_password_EC', 'Contraseña') .'"'); ?>
    </div>

    <div class="checkbox" style="display: none;">
      <label><?php echo functions::form_draw_checkbox('remember_me', '1'); ?> <?php echo language::translate('title_remember_me_EC', 'Recordarme'); ?></label>
    </div>

    <p class="btn-group btn-block">
      <?php echo functions::form_draw_button('login', language::translate('title_sign_in_EC', 'Iniciar sesion')); ?>
    </p>

    <p class="text-center">
      <a href="<?php echo document::ilink('reset_password'); ?>"><?php echo language::translate('text_lost_your_password_EC', '¿Olvidaste tu contraseña?'); ?></a>
    </p>

  <?php echo functions::form_draw_form_end(); ?>
</div>
