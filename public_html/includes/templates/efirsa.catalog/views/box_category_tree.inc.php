<div id="box-category-tree" class="box">
  <!--Este era h2-->
  <button class="title btn-categories"><?php echo language::translate('title_categories', 'Categories'); ?>
    <!--<i class="icon fa fa-caret-right flag-icon1 flip-right padding-le" aria-hidden="true"></i>--></button>
  <div class="categories-m">
  <ul class="nav nav-primary nav-pills nav-stacked align-categories">
<?php
  if (!function_exists('custom_draw_category_tree')) {
    function custom_draw_category_tree($categories, $indent=0) {
      foreach ($categories as $category) {
        echo '  <li class="category-'. $category['id'] . (!empty($category['active']) ? ' active' : '') .'">' . PHP_EOL .
             '    <a href="'. htmlspecialchars($category['link']) .'">' .
             '<i class="fa fa-'. (empty($category['opened']) ? 'plus' : 'minus') .'-square" style="font-size: 0.75em;"></i> '. $category['name'] .
             '</a>' .  PHP_EOL;
        if (!empty($category['subcategories'])) {
          echo '<ul class="nav nav-pills nav-stacked">' . PHP_EOL;
          echo PHP_EOL . custom_draw_category_tree($category['subcategories'], $indent+1);
          echo '</ul>' . PHP_EOL;
        }
        echo '  </li>' . PHP_EOL;
      }

    }
  }
  custom_draw_category_tree($categories);
?>
  </ul>
</div>
</div>