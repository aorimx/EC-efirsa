<!-- START HEADER -->
<ul class="list-inline pull-right">
  <li>
    <?php echo 
      functions::form_draw_link_button(document::link('', array('app' => $_GET['app'], 'doc'=> 'pagesection','new'=>true)), language::translate('title_add_new_page', 'Agregar nueva pàgina'), '', 'add'); 
    ?>
  </li>
</ul>

<h1><?php echo $app_icon; ?> Page list  </h1>

<!-- END HEADER -->





<?php
    function get_pages_list() {
      global $num_product_rows;
      $output = '';
      $pages_query = ctrl_pages_custom::loadAll();
      if (database::num_rows($pages_query) == 0) { //TAKE CARE -> SOFTDELETING
        $output = '<tr><td>&nbsp;</td><td>&nbsp;</td></tr>';
      }
      while ($page=database::fetch($pages_query)) {
        $num_product_rows++;
        $output .= '<tr class="'. (false ? ' semi-transparent' : null) .'">' . PHP_EOL
                 . '  <td>'. functions::form_draw_checkbox('products['. $page['id'] .']', $page['id'], true) .'</td>' . PHP_EOL
                 . '  <td>'. functions::draw_fonticon('fa-circle', 'style="color: '. (!empty($page['status']) ? '#99cc66' : '#ff6666') .';"') .'</td>' . PHP_EOL
                 . '<td>' . $page['title'] .'</td>' 
                 . '<td>' . $page['meta_description'] .'</td>' 
                 ;
        $output .= '  <td style="text-align: right;"></td>' . PHP_EOL
                 . '  <td class="text-right"><a href="'. document::href_link('', array('app' => $_GET['app'], 'doc' => 'pagesection', 'page_id' => $page['id'] )) .'" title="'. language::translate('title_edit', 'Edit') .'">'. functions::draw_fonticon('fa-pencil').'</a></td>' . PHP_EOL
                 . '</tr>' . PHP_EOL;
      }
      database::free($pages_query);
      return $output;
    }

?>



<table class="table table-striped data-table">
    <thead>
        <tr>
        <th><?php echo functions::draw_fonticon('fa-check-square-o fa-fw checkbox-toggle', 'data-toggle="checkbox-toggle"'); ?></th>
        <th>&nbsp;</th>
        <th class=""><?php echo language::translate('title_name', 'Name'); ?></th>
        <th class="main">Meta description</th>
        <th></th>
        <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php echo get_pages_list(); ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5">Pàginas: <?php echo $num_product_rows; ?></td>
      </tr>
    </tfoot>
</table>

<p>
    <ul class="list-inline">
      <li><?php echo language::translate('text_with_selected', 'With selected'); ?>:</li>
      <li>
        <div class="btn-group">
          <?php echo functions::form_draw_button('enable', language::translate('title_enable', 'Enable'), 'submit', '', 'on'); ?>
          <?php echo functions::form_draw_button('disable', language::translate('title_disable', 'Disable'), 'submit', '', 'off'); ?>
        </div>
      </li>
      <li>
        <div>
          <?php echo functions::form_draw_categories_list('category_id', isset($_POST['category_id']) ? $_POST['category_id'] : ''); ?>
        </div>
      </li>
      <li>
        <div class="btn-group">
          <?php echo functions::form_draw_button('move', language::translate('title_move', 'Move'), 'submit', 'onclick="if (!confirm(\''. str_replace("'", "\\\'", language::translate('warning_mounting_points_will_be_replaced', 'Warning: All current mounting points will be replaced.')) .'\')) return false;"'); ?>
          <?php echo functions::form_draw_button('copy', language::translate('title_copy', 'Copy'), 'submit'); ?>
          <?php echo functions::form_draw_button('duplicate', language::translate('title_duplicate', 'Duplicate'), 'submit'); ?>
        </div>
      </li>
      <li>
        <div class="btn-group">
          <?php echo functions::form_draw_button('unmount', language::translate('title_unmount', 'Unmount'), 'submit'); ?>
          <?php echo functions::form_draw_button('delete', language::translate('title_delete', 'Delete'), 'submit', 'onclick="if (!confirm(\''. str_replace("'", "\\\'", language::translate('text_are_you_sure', 'Are you sure?')) .'\')) return false;"'); ?>
        </div>
      </li>
    </ul>
  </p>
