<?php if ($products) { ?>
    <div class="btn-group pull-right hidden-xs container-filtros">
      <span id="caption">Ordenar por</span>
      <div class="select">
        <?php
          $separator = false;
          echo '<select>';
          foreach ($sort_alternatives as $key => $value) {
            if ($_GET['sort'] == $key) {
              //echo '<span class="btn btn-default activo">'. $value .'</span>';
              echo '<option selected>' . ucfirst($value)  . '</option>';
            } else {
              //echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
              echo '<option value="' . document::href_ilink(null, array('sort' => $key), true) .  '">' . ucfirst($value) . '</option>';
            }
          }
          echo '</select>';
        ?>
      </div>
      <!--div id="view">
        <a href="<?php echo  document::href_ilink(null, array('view' => 'column'), true) ?>"><i  class="fa fa-th" aria-hidden="true"></i></a>
        <a href="<?php echo  document::href_ilink(null, array('view' => 'row'), true) ?>"><i  class="fa fa-align-justify" aria-hidden="true"></i></a>
      </div-->
    </div>
    <?php } ?>