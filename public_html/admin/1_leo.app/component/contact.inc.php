<!-- START HEADER -->
<ul class="list-inline pull-right">
  <li>
    <?php echo 
      functions::form_draw_link_button(document::link('', array('app' => $_GET['app'], 'doc'=> 'edit_page','new'=>true)), language::translate('title_add_new_page', 'Agregar nueva pàgina'), '', 'add'); 
    ?>
  </li>
</ul>

<h1><?php echo $app_icon; ?> Contact  </h1>

<!-- END HEADER -->


<?php
    var_dump($_GET);
?>

