<div class="thumbnail-content thumbnail-category category-<?php echo $category_id; ?> col-xs-whole col-sm-halfs col-md-thirds">
  <a class="link shadow hover-light" href="<?php echo htmlspecialchars($link); ?>">
    <div class="image-thumbnail"><img src="<?php echo htmlspecialchars($image['thumbnail']); ?>" alt="" title="<?php echo htmlspecialchars($name); ?>" /></div>
    <div class="caption">
      <h3><i class="icon fa fa-caret-right flag-icon1 flip-right" aria-hidden="true"></i><?php echo $name; ?></h3>
      <?php echo $short_description ? '<p>'.$short_description.'</p>' : $short_description; ?>
    </div>
  </a>
</div>
