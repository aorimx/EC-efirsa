var $j = jQuery.noConflict();

jQuery(function(){



			 //cambiar iconos twitter on hover.
			jQuery(".bolsaMenu").mouseover(function () {
			    jQuery(this).attr("src", "http://efirsa.mx/beta/images/bolsag.png");

			});
			jQuery(".bolsaMenu").mouseout(function () {
				jQuery(this).attr("src", "http://efirsa.mx/beta/images/bolsa.png");

			});

			//cambiar iconos twitter on hover.
		 jQuery(".carritoMenu").mouseover(function () {
				 jQuery(this).attr("src", "http://efirsa.mx/beta/images/carritog.png");

		 });
		 jQuery(".carritoMenu").mouseout(function () {
			 jQuery(this).attr("src", "http://efirsa.mx/beta/images/carrito.png");

		 });

			//cambiar iconos FB on hover.
		 jQuery(".lupaMenu").mouseover(function () {
				 jQuery(this).attr("src", "http://efirsa.mx/beta/images/lupag.png");

		 });
		 jQuery(".lupaMenu").mouseout(function () {
			 jQuery(this).attr("src", "http://efirsa.mx/beta/images/lupa.png");

		 });

});
