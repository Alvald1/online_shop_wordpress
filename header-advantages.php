 <!-- Преимущества  -->
    <div
      class="advantages"
      style="background-image: url(<?= CFS()->get('bg_1');?>)"
    >
      <div class="container">
        <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
      </div>
    </div>
    <div
      class="advantages-cards"
      <?php
	$imgID = get_field('bg');
	$imgSize = "full"; // (thumbnail, medium, large, full or custom size)
	$imgArr = wp_get_attachment_image_src( $imgID,$imgSize );
?>
      style="background-image: url(<?= $imgArr[0];?>)"
    >
      <div class="container">
        <div class="row advantages-cards-inner">
            <?php
            $posts = get_posts([
                'numberposts'=> -1,
                'category_name'=>'advantages',
                'orderby'=>'title',
                'order'=>'ASC',
                'post_type'=>'post',
                'suppres_filter'=>true
            ]);
            foreach($posts as $post){
                setup_postdata($post);
            ?>
          <div class="col-4 col-lg-6 col-sm-12 advantages-card">
            <?php the_post_thumbnail('adv_thumbnail');?>
            <h3><?php the_title(  );?></h3>
            <?php the_content(  );?>
          
        </div>
        <?php
        }
        wp_reset_postdata(  );
        ?>
      </div>
    </div>