<div>
	<div class="content-slider">
		<div class="slider">
			<?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente4.inc.php'); ?>
		  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente4.inc.php'); ?>
		  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente4.inc.php'); ?>
		  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/Componente4.inc.php'); ?>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
	  $('.slider').slick({
	    dots: true,
		  infinite: true,
		  speed: 500,
		  fade: true,
		  cssEase: 'linear'
	  });
	});
</script>
