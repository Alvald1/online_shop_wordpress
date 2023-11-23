<?php
/*
Template Name: Главная
*/
get_header( ); ?>
    <!-- Шапка -->
    <div class="header" style="background-image: url(<?= CFS()->get('bg');?>)">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-12">
            <div class="header-inner">
              <div class="header-catalog">
                <h2>Каталог</h2>
                <div class="obuv">
                  <div class="shoe">
                    <a href="<?=get_term_link( 'nike', 'product_cat' );?>"
                      ><img src="<?= CFS()->get('nike_bg');?>" width="150px" alt=""
                    /></a>
                  </div>
                  <div class="shoe">
                    <a href="<?=get_term_link( 'reebok', 'product_cat' );?>"
                      ><img src="<?= CFS()->get('reebok_bg');?>" width="150px" alt=""
                    /></a>
                  </div>
                </div>
                <div class="obuv">
                  <div class="shoe">
                    <a href="<?=get_term_link( 'new_balance', 'product_cat' );?>"
                      ><img src="<?= CFS()->get('new_balance_bg');?>" width="150px" alt=""
                    /></a>
                  </div>
                  <div class="shoe">
                    <a href="<?=get_term_link( 'adidas', 'product_cat' );?>"
                      ><img src="<?= CFS()->get('adidas_bg');?>" width="150px" alt=""
                    /></a>
                  </div>
                </div>
                <a class="btn" href="http://mysite/shop/">Смотреть</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_header( 'advantages' );?>
    <!-- О нас -->
    <div class="about" style="background-image: url(<?= CFS()->get('about_bg');?>)">
      <div class="container">
        <div class="row about-inner">
          <div class="col-6 col-lg-12">
            <h2>
              VIBE STYLE – ЭТО ВЫСОКОКАЧЕСТВЕННЫЙ ПРОДУКТ
              <span>ОТ ПРОИЗВОДИТЕЛЯ.</span>
            </h2>
            <p></p>
          </div>
          <div class="col-6 col-lg-12 text-center">
            <a href="http://mysite/shop/" class="btn">Перейти в каталог</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Популярные товары -->
    <div class="popular">
      <div class="container">
        <div class="row popular-title">
          <h2>ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
        </div>
        <?php echo do_shortcode("[products limit='6' columns='3' orderby='popularity']"); ?>
        <div class="row">
          <div class="col-12 text-center">
            <a href="http://mysite/shop/" class="btn">Перейти в каталог</a>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer( ); ?>