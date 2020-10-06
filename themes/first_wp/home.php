<?php get_header(); //header.phpを読み込む(includeする)?>
  <div id="content">
    <div id="inner-content" class="wrap cf">
        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php echo get_theme_file_uri(); ?>
        <ul class="bxslider">
          <li><img src="<?php echo get_theme_file_uri() . '/images/kirby.png'; ?>" alt="" width="640" height="300"></li>
          <li><img src="<?php echo get_theme_file_uri() ?>/images/kirby.png" alt="" width="640" height="300"></li>
          <li><img src="<?php echo get_theme_file_uri() ?>/images/kirby.png" alt="" width="640" height="300"></li>
          <li><img src="<?php echo get_theme_file_uri() ?>/images/kirby.png" alt="" width="640" height="300"></li>
        </ul>
        <p id="time"></p>
        </main>
    </div>
  </div>
<?php get_footer(); //footer.phpを読み込む(includeする)?>
