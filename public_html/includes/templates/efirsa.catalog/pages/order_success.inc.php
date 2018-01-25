<main id="content" class="container-alert">
  {snippet:notices}

  <div id="box-order-success" class="order-success">
	<i class="fa fa-cart-plus" aria-hidden="true"></i>
    <h1 class="title"><?php echo strtr(language::translate('title_order_completed', 'Your order %order_id is successfully completed!'), array('%order_id' => $order['id'])); ?></h1>

    <p><?php echo language::translate('description_order_completed', 'Thank you for shopping in our store. An order confirmation e-mail has been sent. We will process your order shortly.'); ?></p>
    <button class="btn-print" style="padding-left: 24px;"><a href="<?php echo htmlspecialchars($printable_link); ?>" target="_blank"><?php echo language::translate('description_click_printable_copy', 'Click here for a printable copy'); ?></a></button>
    <button> <a href="<?php echo document::ilink('index_tienda.php'); ?>"">Seguir comprando</a></button>
    <?php if ($payment_receipt) echo $payment_receipt; ?>

    <?php if ($order_success_modules_output) echo $order_success_modules_output; ?>
  </div>
</main>
