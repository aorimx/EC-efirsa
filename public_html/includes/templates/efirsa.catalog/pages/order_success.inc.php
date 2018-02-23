<main id="content" class="container-alert">
  {snippet:notices}

  <div id="box-order-success" class="order-success">
	<i class="fa fa-cart-plus" aria-hidden="true"></i>
    <h1 class="title"><?php echo strtr(language::translate('title_order_completed_EC', 'Tu pedido %order_id se completo con éxito'), array('%order_id' => $order['id'])); ?></h1>

    <p><?php echo language::translate('description_order_completed_EC', 'Gracias por comprar en nuestra tienda. Se ha enviado un correo electrónico de confirmación de pedido. Procesaremos su pedido en breve.'); ?></p>
    <a href="<?php echo htmlspecialchars($printable_link); ?>" target="_blank"><button class="btn-print" style="padding-left: 24px;"><?php echo language::translate('description_click_printable_copy_EC', 'Click aqui para imprimir'); ?></button></a>
    <a href="<?php echo document::ilink('index_tienda.php'); ?>""><button>Seguir comprando</button></a>
    <?php if ($payment_receipt) echo $payment_receipt; ?>

    <?php if ($order_success_modules_output) echo $order_success_modules_output; ?>
  </div>
</main>
