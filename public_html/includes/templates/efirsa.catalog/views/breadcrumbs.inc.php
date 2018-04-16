<ul class="breadcrumb">
<?php
  foreach ($breadcrumbs as $breadcrumb) {
    if (!empty($breadcrumb['link'])) {

      echo '<li><a href="'. 
      (strtolower($breadcrumb['title']) == 'home'? document::ilink('index_tienda.php'):htmlspecialchars($breadcrumb['link']) ) .'">'. 
      (strtolower($breadcrumb['title']) == 'home'?'<i class="fa fa-home" aria-hidden="false"></i>':$breadcrumb['title'] ) .
      '</a></li>';

    } 
  }
?>
</ul>
