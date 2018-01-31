<!-- START HEADER -->
<h1><?php echo $app_icon; ?> Hero  </h1>
<!-- END HEADER -->

<ul>
    <li><p>Validar que el component_id corresponda al componente que se esta trabajando</p></li>
</ul>

<?php
      $compoment_content = null;

      if (!empty($_GET['component_id']))
          $compoment_content = new ctrl_pages_content_custom((int)$_GET['component_id']);
      else 
          $compoment_content = new ctrl_pages_content_custom();

      if (!empty($_POST['save'])) {
          { //Còdigo extraido de logotype.inc.php
              if (empty($_FILES['image'])) {
                notices::add('errors', language::translate('error_missing_image', 'You must select an image'));
              } else {
                $image = new ctrl_image($_FILES['image']['tmp_name']);
                if (!$image->width()) {
                   notices::add('errors', language::translate('error_invalid_image', 'The image is invalid'));
                }
              }
          
              if (empty(notices::$data['errors'])) {
          
                $filename = 'hero.png';
          
                if (is_file(FS_DIR_HTTP_ROOT . WS_DIR_IMAGES . $filename)) unlink(FS_DIR_HTTP_ROOT . WS_DIR_IMAGES . $filename);
                functions::image_delete_cache(FS_DIR_HTTP_ROOT . WS_DIR_IMAGES . $filename);
          
                if (settings::get('image_downsample_size')) {
                  list($width, $height) = explode(',', settings::get('image_downsample_size'));
                  $image->resample($width, $height, 'FIT_ONLY_BIGGER');
                }
          
                if ($image->write(FS_DIR_HTTP_ROOT . WS_DIR_IMAGES . $filename, 'png')) {
                  //notices::add('success', language::translate('success_changes_saved', 'Changes saved'));
                  //header('Location: '. document::link());
                  //exit;
                  echo 'imagen subida!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
                } else {
                  notices::add('errors', language::translate('error_failed_uploading_image', 'The uploaded image failed saving to disk. Make sure permissions are set.'));
                  echo 'error!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1';
                }
              }
          }
          $compoment_content->data['component_content'] = array(
            'title'=>$_POST['title'],
            'subtitle'=>$_POST['subtitle'],
            'btn_title'=>$_POST['btn_title'],
            'btn_link'=>$_POST['btn_link'],
            'imagen'=> 'hero.png'
          );
          $compoment_content->save();
          notices::add('success', language::translate('success_changes_saved', 'Changes saved'));
          //header('Location: '. document::link('', array('app' => $_GET['app'], 'doc' => 'edit_page', 'page_id' => $_GET['page_id'])));
          //exit;
      }
  
      if (!empty($_POST['delete'])){
          //$compoment_content->delete();
          notices::add('success', language::translate('success_post_deleted', 'Post deleted'));
          header('Location: '. document::link('', array('app' => $_GET['app'],'doc' => 'edit_page', 'page_id' => $_GET['page_id'])));
          exit;
      }


?>
<br>



  <?php echo functions::form_draw_form_begin('hero_form', 'post', false, true, 'style="max-width: 320px;"'); ?>


  <label for="title" >Title</label>
  <?php echo functions::form_draw_input('title',(isset($compoment_content->data['component_content']['title'])?$compoment_content->data['component_content']['title']:'')); ?>
  <label for="subtitle">Subtitle</label>
  <?php echo functions::form_draw_input('subtitle',(isset($compoment_content->data['component_content']['subtitle'])?$compoment_content->data['component_content']['subtitle']:'')); ?>
  <label for="btn_title">Button title</label>
  <?php echo functions::form_draw_input('btn_title',(isset($compoment_content->data['component_content']['btn_title'])?$compoment_content->data['component_content']['btn_title']:'')); ?>
  <label for="btn_link">Button link</label>
  <?php echo functions::form_draw_input('btn_link',(isset($compoment_content->data['component_content']['btn_link'])?$compoment_content->data['component_content']['btn_link']:'')); ?>
  <label><?php echo language::translate('title_new_image', 'New Image'); ?></label>
  <?php echo functions::form_draw_file_field('image', ''); ?>


  <p class="btn-group">
      <?php echo functions::form_draw_button('save', language::translate('title_save', 'Save'), 'submit', '', 'save'); ?>
      <?php echo functions::form_draw_button('cancel', language::translate('title_cancel', 'Cancel'), 'button', 'onclick="history.go(-1);"', 'cancel'); ?>
      <?php echo (isset($compoment_content->data['id'])) ? functions::form_draw_button('delete', language::translate('title_delete', 'Delete'), 'submit', 'onclick="if (!confirm(\''. language::translate('text_are_you_sure', 'Are you sure?') .'\')) return false;"', 'delete') : false; ?>
  </p>

  <?php echo functions::form_draw_form_end(); ?>