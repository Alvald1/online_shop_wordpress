<!-- Футер -->
<?php
	$imgID = get_field('bg-menu');
	$imgSize = "full"; // (thumbnail, medium, large, full or custom size)
	$imgArr = wp_get_attachment_image_src( $imgID,$imgSize );
?>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <?php
            wp_nav_menu([
                'theme_location' => 'bottom',
                'container'=>'',
                'items_wrap'=>'%3$s'
            ]);
            
          ?>
            <span class="accent-color">&copy; </span> Vibe Style, 2023
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(  );?>
  </body>
</html>
