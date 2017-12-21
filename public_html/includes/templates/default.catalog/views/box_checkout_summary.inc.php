<div id="box-checkout-summary" class="box">
  <div class="backgroung-gray">
    <h2 class="title">Resumen</h2>
  </div>

  <div id="order_confirmation-wrapper">

    <table>

      <tbody>
        <?php foreach ($order_total as $row) { ?>
        <tr>
          <td class="text-left padding-left padding-top padding-bottom" colspan="5"><strong><?php echo $row['title']; ?>:</strong></td>
          <td class="text-right padding-right padding-top padding-bottom"><?php echo !empty(customer::$data['display_prices_including_tax']) ? currency::format($row['value'] + $row['tax'], false) : currency::format($row['value'], false); ?></td>
        </tr>
        <?php } ?>

        <?php if ($tax_total) { ?>
        <tr>
          <td class="text-right" style="color: #999999;" colspan="5"><?php echo $incl_excl_tax; ?>:</td>
          <td class="text-right" style="color: #999999;"><?php echo $tax_total; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div>
      <p class="text-left padding-left">Su pedido es apto para instalacion inmediata</p>
    </div>
    <div class="backgroung-black" style="display: inline-flex;">
      <div class="text-left td-border padding-left" colspan="5" style="width: 50%;"><strong>Total: </strong></div>
      <div class="text-right td-border padding-right" style="width: 50%;"><strong><?php echo currency::format($payment_due, false); ?></strong></div>
    </div>
  </div>
    <!--<div class="comments form-group">
      <label><?php echo language::translate('title_comments', 'Comments'); ?></label>
      <?php echo functions::form_draw_textarea('comments', true); ?>
    </div>-->

    <div class="confirm padding-top">
      <div class="col-md-fourths">
        <button class="btn btn-block btn-lg btn-success" type="submit" name="confirm_order" value="true"<?php echo !empty($error) ? ' disabled="disabled"' : ''; ?>><?php echo $confirm; ?></button>
      </div>
      <div class="padding-left padding-right padding-top">
        <?php if ($error) { ?>
          <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php } else { ?>
          <p class="terms-of-purchase text-left" style="font-size: 1.25em; margin-top: 0.5em;">
            Recibiras un correo de uno de nuestros acesores para mas informacion
          </p>
        <?php } ?>
        <div>
          <h3>Envio y Devolucion</h3>
          <p style="font-size: 1.25em;">Si deseas cabiar o devolver tu compra tendras 90 dias para hacerlo</p>
        </div>
      </div>
    </div>
  </div>
</div>