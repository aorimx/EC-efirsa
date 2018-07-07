<div id="box-contact-us" class="box">

  <div class="row">
    <div class="col-md-6">

      <h1><?php echo language::translate('title_contact_us_EC', 'Contactanos'); ?></h1>

      <?php echo functions::form_draw_form_begin('contact_form', 'post'); ?>

        <div class="form-group">
          <label><?php echo language::translate('title_name_EC', 'Nombre'); ?></label>
          <?php echo functions::form_draw_text_field('name', true, 'required="required"'); ?>
        </div>

        <div class="form-group">
          <label><?php echo language::translate('title_email_address_EC', 'Correo Electronico'); ?></label>
          <?php echo functions::form_draw_email_field('email', true, 'required="required"'); ?>
        </div>

        <div class="form-group">
          <label><?php echo language::translate('title_subject_EC', 'Tema'); ?></label>
          <?php echo functions::form_draw_text_field('subject', true, 'required="required"'); ?>
        </div>

        <div class="form-group">
          <label><?php echo language::translate('title_message_EC', 'Mensaje'); ?></label>
          <?php echo functions::form_draw_textarea('message', true, 'required="required" style="height: 250px;"'); ?>
        </div>

        <?php if (settings::get('captcha_enabled')) { ?>
        <div class="row">
          <div class="form-group col-md-halfs">
            <label><?php echo language::translate('title_captcha_EC', 'CAPTCHA'); ?></label>
            <?php echo functions::form_draw_captcha_field('captcha', 'contact_us', 'required="required"'); ?>
          </div>
        </div>
        <?php } ?>

        <p><?php echo functions::form_draw_button('send', language::translate('title_send', 'Send'), 'submit', 'style="font-weight: bold;"'); ?></p>

      <?php echo functions::form_draw_form_end(); ?>
    </div>

    <div class="col-md-6">
      <h2><?php echo language::translate('title_contact_details_EC', 'Detalles de contacto'); ?></h2>

      <p class="address"><?php echo nl2br(settings::get('store_postal_address')); ?></p>

      <?php if (settings::get('store_phone')) { ?><p class="phone"><?php echo functions::draw_fonticon('fa-phone'); ?> <a href="tel:<?php echo settings::get('store_phone'); ?>"><?php echo settings::get('store_phone'); ?></a></p><?php } ?>

      <p class="email"><?php echo functions::draw_fonticon('fa-envelope'); ?> <a href="mailto:<?php echo settings::get('store_email'); ?>"><?php echo settings::get('store_email'); ?></a></p>

      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/box_store_map.inc.php'); ?>
    </div>
  </div>
</div>
