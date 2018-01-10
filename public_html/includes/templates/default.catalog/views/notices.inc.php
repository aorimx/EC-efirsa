<div id="notices">
<?php
  foreach (array_keys($notices) as $type) {
    foreach ($notices[$type] as $notice) {
      switch ($type) {
        case 'errors':
          /*echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>' . functions::draw_fonticon('fa-exclamation-triangle') . ' ' . $notice .'</div>' . PHP_EOL;*/
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal({ title: "Oops!", text: "Algo salio mal", type: "error", confirmButtonColor: "#228B22"});';
          echo '});</script>'; 
          break;
        case 'warnings':
          echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a>' . functions::draw_fonticon('fa-exclamation-triangle') . ' ' . $notice .'</div>' . PHP_EOL;
          break;
        case 'notices':
          echo '<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert">&times;</a>' . functions::draw_fonticon('fa-info-circle') . ' ' . $notice .'</div>' . PHP_EOL;
          break;
        case 'success':
          /*echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>' .functions::draw_fonticon('fa-check-circle') . ' ' . $notice .'</div>' . PHP_EOL;*/
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal({ title: "¡Operación exitosa", text: "Se han realizado con exito las actualizaciones", type: "success", confirmButtonColor: "#228B22"});';
          echo '});</script>'; 
          break;
      }
    }
  }
?>
</div>
<script>
  setTimeout(function(){$('#notices').fadeOut();}, 20000);
</script>