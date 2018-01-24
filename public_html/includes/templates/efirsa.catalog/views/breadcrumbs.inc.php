<ul class="breadcrumb">
<?php
  foreach ($breadcrumbs as $breadcrumb) {
    if (!empty($breadcrumb['link'])) {
      echo '<li><a href="'. htmlspecialchars($breadcrumb['link']) .'">'. (strtolower($breadcrumb['title']) == 'home'?'<i class="fa fa-home" aria-hidden="true"></i>':$breadcrumb['title'] ) .'</a></li>';

    } else {
      echo '<li>'. $breadcrumb['title'] .'</li>';
    }
  }
?>
</ul>
