var $j = jQuery.noConflict();

jQuery(function(){



			 //cambiar iconos twitter on hover.
			jQuery(".bolsaMenu").mouseover(function () {
			    jQuery(this).attr("src", "http://efirsa.mx/beta/img/bolsag.png");

			});
			jQuery(".bolsaMenu").mouseout(function () {
				jQuery(this).attr("src", "http://efirsa.mx/beta/img/bolsa.png");

			});

			//cambiar iconos twitter on hover.
		 jQuery(".carritoMenu").mouseover(function () {
				 jQuery(this).attr("src", "http://efirsa.mx/beta/img/carritog.png");

		 });
		 jQuery(".carritoMenu").mouseout(function () {
			 jQuery(this).attr("src", "http://efirsa.mx/beta/img/carrito.png");

		 });

			//cambiar iconos FB on hover.
		 jQuery(".lupaMenu").mouseover(function () {
				 jQuery(this).attr("src", "http://efirsa.mx/beta/img/lupag.png");

		 });
		 jQuery(".lupaMenu").mouseout(function () {
			 jQuery(this).attr("src", "http://efirsa.mx/beta/img/lupa.png");

		 });

});
