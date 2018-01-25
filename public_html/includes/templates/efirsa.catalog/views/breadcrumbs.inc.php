<ul class="breadcrumb">
<?php
  foreach ($breadcrumbs as $breadcrumb) {
    if (!empty($breadcrumb['link'])) {
      echo '<li><a href="'. htmlspecialchars($breadcrumb['link']) .'">'. (strtolower($breadcrumb['title']) == 'home'?'<i class="fa fa-home" aria-hidden="false"></i>':$breadcrumb['title'] ) .'</a></li>';
    } 
  }
?>
</ul>
