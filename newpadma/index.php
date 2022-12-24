<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Multipurpose Bridege</title>
    <?php wp_head();?>
</head>
<body>
    <!-- Slider -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- category set -->
    <?php
    $slid = new WP_Query([
        'post_type' => 'post',
        'category_name' => 'slider'
    ]);
    ?>
    <?php
    $x = 0;
    while($slid->have_posts()){$slid->the_post();
        $x++;
    ?>
    <div class="carousel-item <?= ($x==1)? 'active':''?>">
        <?php the_post_thumbnail();?>
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <?php }?>    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- Slider -->
    <!-- logo -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6 logo_left">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 logo_right">
                <?php dynamic_sidebar('bdgovlogo');?>
            </div>
        </div>

    </section>
    <!-- logo -->
    <!-- Menu -->
    <section class="container navbar-expand bg-light menu">
        <?php
        wp_nav_menu([
            'theme_location'       => 'PM',
            'menu_class'           => 'navbar-nav',
        ]);
        ?>

    </section>
    <!-- Menu -->
    <!-- hero_part -->
    <section class="container hero text-center mt-4">
        <div class="row"><?php dynamic_sidebar('herotitle');?></div>
        <div class="row mt-5">
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('card1');?>
        </div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('card2');?>
        </div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('card3');?>
        </div>
            </div>
        </div>
    </section>
    <!-- hero_part -->

    <!-- Photo -->
    <section class="container photo mt-5">
        <div class="row">
            <div class="col-sm-5">
                <?php dynamic_sidebar('line_left');?>
            </div>
            <div class="col-sm-2"><?php dynamic_sidebar('phototitle');?></div>
            <div class="col-sm-5"><?php dynamic_sidebar('line_right');?></div>
        </div>
        <div class="row mt-6">
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                <?php dynamic_sidebar('photocard1');?>
        </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                <?php dynamic_sidebar('photocard2');?>
        </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                <?php dynamic_sidebar('photocard3');?>
        </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                <?php dynamic_sidebar('photocard4');?>
        </div>
            </div>
        </div>
    </section>
    <!-- Photo -->

    <!-- News part -->
    <section class="container news">
    <div class="row">
            <div class="col-sm-5">
                <?php dynamic_sidebar('line_left');?>
            </div>
            <div class="col-sm-2"><?php dynamic_sidebar('newstitle');?></div>
            <div class="col-sm-5"><?php dynamic_sidebar('line_right');?></div>
        </div>
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- category set -->
    <?php
    $slid = new WP_Query([
        'post_type' => 'post',
        'category_name' => 'slider'
    ]);
    ?>
    <?php
    $x = 0;
    while($slid->have_posts()){$slid->the_post();
        $x++;
    ?>
    <div class="carousel-item <?= ($x==1)? 'active':''?>">
        <?php the_title();?>
      
    </div>
    <?php }?>    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </section>
    <!-- News part -->

<?php wp_footer();?>
</body>

</html>
