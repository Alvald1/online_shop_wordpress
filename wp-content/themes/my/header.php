<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php
        if (is_404()){
            echo 'Ошибка 404';
        } else{
            the_title();
        }
    ?>
    </title>
    <?php wp_head(  );?>
  </head>
  


  <body <?php body_class() ?>>
    <!-- Меню -->
  

    <div class="menu">
      <div class="container">
        <div class="row">
          <div class="logo">
            <a href="<?= home_url( )?>">
          <?php the_custom_logo( );?>    
        </a>
          </div>
          <?php
            wp_nav_menu([
                'theme_location' => 'top',
                'container'=>'',
                'menu_class'=>'',
                'menu_id'=>'']);
            
          ?>
          <div class="phone">
            <a href="tel:+78005353555">&#9742; +7 (800) 535-35-55</a>
          </div>
        </div>
      </div>
    </div>