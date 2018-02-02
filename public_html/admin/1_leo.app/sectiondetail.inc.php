<!-- START HEADER -->
<?php if (!empty($_GET['section_id'])){ ?>
    <ul class="list-inline pull-right">
    <li>
        <?php echo 
        functions::form_draw_link_button(document::link('', array('app' => $_GET['app'],'page_id'=>$_GET['page_id'], 'doc'=> 'hero','section_id'=>(int)$_GET['section_id'],'new'=>true)), language::translate('title_add_new_', 'Agregar nuevo componente'), '', 'add'); 
        ?>
    </li>
    </ul>
<?php } ?>
<h1><?php echo $app_icon; ?> Section detail  </h1>
<!-- END HEADER -->




<?php 
    $page = null;

    if (!empty($_GET['section_id']))
        $page = new ctrl_pages_section_custom((int)$_GET['section_id']);
    else 
        $page = new ctrl_pages_section_custom();

    if (!empty($_POST['save'])) {
        //$page->data['language_code'] = $_POST['language_code'];
        $page->data['name'] = $_POST['name'];
        $page->save((int) $_GET['page_id']);
        notices::add('success', language::translate('success_changes_saved', 'Changes saved'));
        header('Location: '. document::link('', array('app' => $_GET['app'], 'doc' => 'pagesection', 'page_id' => $_GET['page_id'])));
        exit;
    }

    if (!empty($_POST['delete'])){
        $page->delete();
        notices::add('success', language::translate('success_post_deleted', 'Post deleted'));
        header('Location: '. document::link('', array('app' => $_GET['app'], 'doc' => 'pagesection','page_id' => $_GET['page_id'])));
        exit;
    }

    function get_page_component_list($page) {
        global $num_components_rows;
        $num_components_rows = 0;
        $output = '';
        $components_query = $page->loadComponents();
        if(empty($components_query))
            $output = '<tr><td>&nbsp;</td><td>&nbsp;</td></tr>';
        else
            foreach ($components_query as $component) {
                $num_components_rows++;
                $output .= '<tr class="'. (false ? ' semi-transparent' : null) .'">' . PHP_EOL
                . '  <td>'. functions::form_draw_checkbox('products['. $component['id'] .']', $component['id'], true) .'</td>' . PHP_EOL
                . '  <td>'. functions::draw_fonticon('fa-circle', 'style="color: '. (false && !empty($page['status']) ? '#99cc66' : '#ff6666') .';"') .'</td>' . PHP_EOL
                . '<td>' . $component['name'] .'</td>' 
                ;
                $output .= '  <td style="text-align: right;"></td>' . PHP_EOL
                . '  <td class="text-right"><a href="'. document::href_link('', array('app' => $_GET['app'], 'doc' => $component['edit_view'],'page_id'=>$_GET['page_id'],'section_id'=>$_GET['section_id'],'component_id' => $component['id'], )) .'" title="'. language::translate('title_edit', 'Edit') .'">'. functions::draw_fonticon('fa-pencil').'</a></td>' . PHP_EOL
                . '</tr>' . PHP_EOL;
            }
        return $output;
    }

?>



<?php echo functions::form_draw_form_begin('template_form', 'post', null, false, 'style="max-width: 320px;"'); ?>

  <div class="form-group">
    <label for="title" >Name</label>
    <?php echo functions::form_draw_input('name',$page->data['name']); ?>
  </div>


  <p class="btn-group">
    <?php echo functions::form_draw_button('save', language::translate('page_save', 'Save'), 'submit', '', 'save'); ?>
    <?php echo functions::form_draw_button('cancel', language::translate('page_cancel', 'Cancel'), 'button', 'onclick="history.go(-1);"', 'cancel'); ?>
    <?php echo (isset($page->data['id'])) ? functions::form_draw_button('delete', language::translate('title_delete', 'Delete'), 'submit', 'onclick="if (!confirm(\''. language::translate('text_are_you_sure', 'Are you sure?') .'\')) return false;"', 'delete') : false; ?>
  </p>

<?php echo functions::form_draw_form_end(); ?>




<?php if(!isset($_GET['new'])){ ?>

    <table class="table table-striped data-table">
        <thead>
            <tr>
            <th><?php echo functions::draw_fonticon('fa-check-square-o fa-fw checkbox-toggle', 'data-toggle="checkbox-toggle"'); ?></th>
            <th>&nbsp;</th>
            <th class="main"><?php echo language::translate('title_name', 'Name'); ?></th>
            <th></th>
            <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php echo get_page_component_list($page); ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5">Componentes: <?php echo $num_components_rows; ?></td>
        </tr>
        </tfoot>
    </table>

<?php }?>