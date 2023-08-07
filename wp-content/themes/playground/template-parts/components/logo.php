<?php
	$header_image_url = get_header_image();

	if ($header_image_url) :
?>
  <img src="<?php echo esc_url($header_image_url); ?>" alt="<?php bloginfo("name"); ?>" width="200" />
<?php else : ?>
  <h2 class="logo__text text-[1.6rem] font-bold"><?php bloginfo("name"); ?></h2>
<?php endif; ?>
