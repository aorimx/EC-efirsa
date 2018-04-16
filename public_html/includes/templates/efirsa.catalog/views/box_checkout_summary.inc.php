<div id="box-checkout-summary">
  <div class="backgroung-gray">
    <h2 class="title">Resumen</h2>
  </div>

  <div id="order_confirmation-wrapper">

        <?php foreach ($order_total as $row) { ?>
        <div class="middle-content">
          <div class="text-left padding-left padding-top padding-bottom halfs-content" colspan="5"><strong><?php echo $row['title']; ?>:</strong></div>
          <div class="text-right padding-right padding-top padding-bottom halfs-content"><?php echo !empty(customer::$data['display_prices_including_tax']) ? currency::format($row['value'] + $row['tax'], false) : currency::format($row['value'], false); ?></div>
        </div>
        <?php } ?>
        <?php if ($tax_total) { ?>
        <div>
          <div class="text-right" style="color: #999999;" colspan="5"><?php echo $incl_excl_tax; ?>:</div>
          <div class="text-right" style="color: #999999;"><?php echo $tax_total; ?></div>
        </div>
        <?php } ?>
    <div>
      <p class="text-left padding-left color-black">Su pedido es apto para instalacion inmediata</p>
    </div>
    <div class="backgroung-black">
      <div class="text-left td-border padding-left" colspan="5" style="width: 50%;"><strong>Total: </strong></div>
      <div class="text-right td-border padding-right" style="width: 50%;"><strong><?php echo currency::format($payment_due, false); ?></strong></div>
    </div>
  </div>
    <!--<div class="comments form-group">
      <label><?php echo language::translate('title_comments_EC', 'Commentarios'); ?></label>
      <?php echo functions::form_draw_textarea('comments', true); ?>
    </div>-->

    <div class="confirm padding-top content-butons">
      <div class="botons">
        <a href="<?php echo document::ilink('index_tienda.php'); ?>"><p class="btn btn-block btn-lg" style="background-color: #6c6c6d; margin-bottom: 5px;">Seguir comprando</p></a>
        <button class="green  oculto " id="btnconfirm" type="submit" name="confirm_order" value="true"<?php echo !empty($error) ? ' disabled="disabled"' : ''; ?>><?php echo $confirm; ?></button>
        <a href="#"><p class="btn btn-block btn-lg btn-back grey oculto" id="btnback" type="submit" value="cambiar" onclick="window.location.reload()">Regresar</p></a>
        <a href="#"><p class="green" id="btncontinuar" type="submit" value="cambiar" onclick="cambiarbtn()">Continuar</p></a>
      </div>
      <div class="padding-left padding-right padding-top" style="text-align: justify;">
        <?php if ($error) { ?>
          <div class="alert alert-danger" style="display: none;"><?php echo htmlspecialchars($error); ?></div>
        <?php } else { ?>
        <?php } ?>
        <div class="comments">
          <p class="terms-of-purchase" style="font-size: 1em; color: #a0a0a0; margin-top: 0.5em;">
            Recibiras un correo de uno de nuestros acesores para mas informacion
          </p>

          <div >
              <h4 style="color: #a0a0a0; ">Envio y Devolucion</h4>
              <p style="font-size: 1em; color: #a0a0a0;">
                Si deseas cabiar o devolver tu compra tendras 90 dias para hacerlo.
              </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
