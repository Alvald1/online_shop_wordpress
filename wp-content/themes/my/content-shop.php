<?php
/*
Template Name: Каталог
*/
get_header( );?>
    <!-- Каталог -->
    <div class="popular" style="background-image: url(<?= CFS()->get('bg');?>)">
      <div class="container">
        <div class="row popular-title">
          <h2><?php get_the_title(  );?></h2>
        </div>
        <?php get_the_content(  );?>

        <!--<div class="category-controll text-center">
          <button class="btn" type="button" data-filter="all">Все</button>
          <button class="btn" type="button" data-filter=".nike">Nike</button>
          <button class="btn" type="button" data-filter=".reebok">
            Reebok
          </button>
          <button class="btn" type="button" data-filter=".new_balance">
            New Balance
          </button>
          <button class="btn" type="button" data-filter=".adidas">
            Adidas
          </button>
          <button class="btn" type="button" data-sort="order:asc">
            По возрастанию
          </button>
          <button class="btn" type="button" data-sort="order:descending">
            По убыванию
          </button>
        </div>
      -->
      	
        <div class="row popular-goods catalog">
          <div
            class="col-3 col-lg-6 col-sm-12 product mix nike"
            data-order="58000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>58000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix new_balance"
            data-order="71000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>71000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix reebok"
            data-order="62000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>62000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix adidas"
            data-order="57000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>57000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix adidas"
            data-order="45000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>45000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix nike"
            data-order="84000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>84000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix nike"
            data-order="102000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>102000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
          <div
            class="col-3 col-lg-6 col-sm-12 product mix nike"
            data-order="96000"
          >
            <img src="img/сatalog/test.jpg" alt="Название" />
            <h3>Название</h3>
            <div>96000 &#8381;</div>
            <a href="shoe.html" class="btn">Подробнее</a>
          </div>
        </div>
        <nav class="navigation pagination" role="navigation">
          <div class="nav-links">
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="">2</a>
            <a class="next page-numbers" href="">Далее</a>
          </div>
        </nav>
      </div>
    </div>
<?php wp_footer(  );?>
