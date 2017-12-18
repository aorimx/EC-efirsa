   $('.order-summary').bind('input', function() { 
    sumar($(this).val()); // get the current value of the input field.
});
   function sumar (valor) {
                      var valor = parseInt(valor); // Convertir el valor a un entero (número).
                        if(parseInt(valor)>=0){
                        total = (485 * parseInt(valor));
                          for(x=0; x<document.getElementsByClassName('Total').length; x++){
                            document.getElementsByClassName('Total')[x].innerHTML = total;
                            console.log("uuu");
                          }
                        }
                        else if(parseInt(valor)<0){
                          total = 0;
                          for(x=0; x<document.getElementsByClassName('Total').length; x++){
                            document.getElementsByClassName('Total')[x].innerHTML = total;
                            console.log("uuu");
                          }
                        }
                      }
