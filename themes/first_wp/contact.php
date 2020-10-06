<?php
/*
Template Name:  お問い合わせフォーム
*/
?>
<?php get_header(); ?>
  <div id="content">
    <div id="inner-content" class="wrap cf">
        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <p>お問い合わせフォーム</p>
        <?php echo do_shortcode('[contact-form-7 id="17" title="コンタクトフォーム 1"]'); ?>
        <p id="time"></p>
        </main>
    </div>
  </div>
<?php get_footer(); ?>
