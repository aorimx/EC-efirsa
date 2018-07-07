<div id="box-manufacturer-logotypes" class="box-manufacturer">
	<button class="btn-solid">Manufacturer</button>
  <ul class="list-inline text-center">
  	<div class="box-manufaturer-img">
    <?php foreach ($logotypes as $logotype) { ?>
      <a href="<?php echo htmlspecialchars($logotype['link']); ?>">
        <img class="manufacturer-image" src="<?php echo htmlspecialchars($logotype['image']); ?>" alt="" title="<?php echo htmlspecialchars($logotype['title']); ?>" style="margin: 0px 15px;">
      </a>
    <?php } ?>
</div>
  </ul>
</div>
