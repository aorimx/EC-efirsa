      $("input[name='asunto']").click(function(){
        $('.dropdow-select').toggleClass('active');
      });
      $('input').click(function(){
        if($(this).attr('name')!="asunto" && $(this).attr('type')!="checkbox")
          $('.dropdow-select').removeClass('active');
      });
      $('.cbe').click(function(){
        var val=$('input[name="asunto"]').val();
        if($(this).is(':checked')){
          $('input[name="asunto"]').val(val + $(this).val());
        }
        else{
          val=val.replace($(this).val(),"");
          $('input[name="asunto"]').val(val);
      
        }
        
      });
      
      $('#contact-form').submit(function(e){
        e.preventDefault();
        $('input').removeClass('error');
        $('textarea').removeClass('error');
        $('label.error').remove();
        var name=$("input[name='nombre']");
        var empresa=$("input[name='nombre-empresa']");
        var puesto=$("input[name='puesto-empresa']");
        var asunto=$("input[name='asunto']");
        var mensaje=$("textarea[name='mensaje']");
        var email=$("input[name='email']");
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if(name.val() === ""){
          $(name).addClass('error');
          $(name).after('<label class="error"> Campo obligatorio</label>');
        }
        if(empresa.val() === ""){
          $(empresa).addClass('error');
          $(empresa).after('<label class="error"> Campo obligatorio</label>');
        }
        if(puesto.val() === ""){
          $(puesto).addClass('error');
          $(puesto).after('<label class="error"> Campo obligatorio</label>');
        }
        if(asunto.val() === ""){
          $(asunto).addClass('error');
          $(asunto).after('<label class="error"> Campo obligatorio</label>');
        }
        if(mensaje.val() === ""){
          $(mensaje).addClass('error');
          $(mensaje).after('<label class="error"> Campo obligatorio</label>');
        }
        if(!pattern.test(email.val())){
          $(email).addClass('error');
          $(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');       
        }
        if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          contactoEnviarDatos();
        }
      

          return false;
      });





       $("input[name='estado']").click(function(){
        $('.dropdow-selectEstado').toggleClass('active');
      });
      $('input').click(function(){
        if($(this).attr('name')!="estado" && $(this).attr('type')!="checkbox")
          $('.dropdow-selectEstado').removeClass('active');
      });
      $('.est').click(function(){
        console.log("se apreto");
        var val=$('input[name="estado"]').val();
        if($(this).is(':checked')){
          $('input[name="estado"]').val($(this).val());
        }
        else{
          val=val.replace($(this).val(),"");
          $('input[name="estado"]').val(val);
      
        }
        
      });


      $("input[name='asuntoP']").click(function(){
        $('.dropdow-selectP').toggleClass('active');
      });
      $('input').click(function(){
        if($(this).attr('name')!="asuntoP" && $(this).attr('type')!="checkbox")
          $('.dropdow-selectP').removeClass('active');
      });
      $('.cbp').click(function(){
        console.log("se apreto");
        var val=$('input[name="asuntoP"]').val();
        if($(this).is(':checked')){
          $('input[name="asuntoP"]').val(val + $(this).val());
        }
        else{
          val=val.replace($(this).val(),"");
          $('input[name="asuntoP"]').val(val);
      
        }
        
      });
      
      $('#contact-form-p').submit(function(e){
        
        e.preventDefault();
        $('input').removeClass('error');
        $('textarea').removeClass('error');
        $('label.error').remove();
        var name=$("input[name='nombrep']");
        var profesion=$("input[name='profesion']");
        
        var asunto=$("input[name='asuntoP']");
        var mensaje=$("textarea[name='mensajep']");
        var email=$("input[name='emailp']");
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if(name.val() === ""){
          $(name).addClass('error');
          $(name).after('<label class="error"> Campo obligatorio</label>');
        }
        if(profesion.val() === ""){
          $(profesion).addClass('error');
          $(profesion).after('<label class="error"> Campo obligatorio</label>');
        }
        
        if(asunto.val() === ""){
          $(asunto).addClass('error');
          $(asunto).after('<label class="error"> Campo obligatorio</label>');
        }
        if(mensaje.val() === ""){
          $(mensaje).addClass('error');
          $(mensaje).after('<label class="error"> Campo obligatorio</label>');
        }
        if(!pattern.test(email.val())){
          $(email).addClass('error');
          $(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');       
        }
        if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtnP_click();
          contactoEnviarDatosP();

          //$('#contact-form').unbind('submit').submit();
        }
      

          return false;
      });