<div id="box-manufacturer-logotypes" class="box hidden-xs hidden-sm">
	<button class="title btn-categories">Manufacturer</button>
  <ul class="list-inline text-center">
  	<div style="display: inline-flex;">
    <?php foreach ($logotypes as $logotype) { ?>
      <a href="<?php echo htmlspecialchars($logotype['link']); ?>">
        <img src="<?php echo htmlspecialchars($logotype['image']); ?>" alt="" title="<?php echo htmlspecialchars($logotype['title']); ?>" style="margin: 0px 15px;">
      </a>
    <?php } ?>
</div>
  </ul>
</div>