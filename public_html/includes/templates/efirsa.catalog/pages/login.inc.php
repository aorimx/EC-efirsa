<aside id="sidebar" style="display: none;">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>

<main id="content">
  {snippet:notices}
  {snippet:breadcrumbs}

  <div style="width: 100%; display: inline-flex; flex-wrap: wrap;">
    <div class="col-md-halfs">
      <div class="box-login" class="box">

        <h2 class="title"><?php echo language::translate('title_sign_in_EC', 'Iniciar sesion'); ?></h2>

        <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login'), false, 'style="max-width: 320px;"'); ?>
          <?php echo functions::form_draw_hidden_field('redirect_url', true); ?>

          <div class="form-group">
            <?php echo functions::form_draw_email_field('email', true, 'placeholder="'. language::translate('title_email_address_EC', 'Email') .'"'); ?>
          </div>

          <div class="form-group">
            <?php echo functions::form_draw_password_field('password', '', 'placeholder="'. language::translate('title_password_EC', 'Contraseña') .'"'); ?>
          </div>

          <div style="display: none;">
            <label><?php echo functions::form_draw_checkbox('remember_me', '1'); ?> <?php echo language::translate('title_remember_me_EC', 'Recordarme'); ?></label>
          </div>

          <p class="btn-group btn-block">
            <?php echo functions::form_draw_button('login', language::translate('title_sign_in_EC', 'Iniciar sesion')); ?>
          </p>

          <p class="text-center">
            <a href="<?php echo document::ilink('reset_password', array('email' => !empty($_POST['email']) ? $_POST['email'] : '')); ?>"><?php echo language::translate('text_lost_your_password_EC', '¿Olvidaste tu contraseña?'); ?></a>
          </p>

        <?php echo functions::form_draw_form_end(); ?>
      </div>
    </div>

    <div class="col-md-halfs">

      <div id="box-login-create" class="box" style="margin-top: 0;">

        <h2 class="title"><?php echo language::translate('title_create_an_account_EC', 'Crear cuenta'); ?></h2>

        <ul>
          <li><?php echo language::translate('description_get_access_to_all_order_history_EC', 'Obtenga acceso a todo su historial de pedidos.'); ?></li>
          <li><?php echo language::translate('description_save_your_cart_items_EC', 'Guarde su carrito de compras para una visita posterior.'); ?></li>
          <li><?php echo language::translate('description_access_your_cart_simultaneously_EC', 'Acceda a su carrito de compras desde diferentes computadoras. ¡Incluso al mismo tiempo!'); ?></li>
          <li><?php echo language::translate('description_faster_checkout_with_prefilled_details_EC', 'Pago más rápido con detalles del cliente prellenado.'); ?></li>
          <li><?php echo language::translate('description_receive_new_offers_EC', 'Reciba información sobre nuevas ofertas y grandes ofertas.'); ?></li>
        </ul>

        <p><a class="btn btn-default" href="<?php echo document::href_ilink('create_account'); ?>"><?php echo language::translate('title_register_now_EC', 'Registrarse ahora'); ?></a><p>
      </div>
    </div>
  </div>
</main>
