<?php get_header(); ?>
<section class="p-single-achievement__head">
  <h2 class="c-section__title">施工実績</h2>
</section>
<section class="p-single-achievement__inner">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      $content = get_the_content();
      $image_src = get_first_image_or_default($content);
  ?>
      <?php
      // サムネイル画像を取得
      $first_image = get_first_image_or_default();
      ?>
      <img src="<?php echo esc_url($first_image); ?>" class="p-single-achievement__image">
      <time class="p-single-achievement__time"><?php echo get_the_date("Y.m.d"); ?></time>
      <h1 class="p-single-achievement__title"><?php the_title(); ?></h1>
      <div class="p-single-achievement__text">
        <?php the_content(); ?>
      </div>
      <a href="<?php echo get_post_type_archive_link('achievement'); ?>" class="p-single-achievement__button">
        一覧に戻る
      </a>
  <?php
    endwhile;
  endif;
  ?>
</section>
<?php get_footer(); ?>