<?php get_header(); ?>
<main>
  <div class="p-achievement">
    <section class="p-achievement__titleArea">
      <h2 class="c-section__subtitle fadeUpTrigger">
        施工実績
      </h2>
      <p class="p-achievement__text fadeUpTrigger">
        弊社がこれまでに手がけた電気工事の主な事例を、<br class="sp-only" />ご紹介させていただきます。<br />
        創業以来、宇治市を拠点に近畿地方の各地で<br class="sp-only" />実績を重ねております。<br />
        情報は随時更新しておりますので、<br class="sp-only" />新規のご依頼や求人へのご応募を検討していらっしゃる方は、参考資料としてぜひお役立てください。
      </p>
    </section>
    <ul class="p-achievement__list">
      <?php
      // サムネイル画像を取得
      $first_image = get_first_image_or_default();
      ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="p-achievement__items fadeUpTrigger">
          <img src="<?php echo esc_url($first_image); ?>" alt="<?php the_title(); ?>" class="p-achievement__items-thumbnail flipLeftTrigger">
          <time class="p-achievement__items-date fadeUpTrigger"><?php echo get_the_date("Y.m.d"); ?></time>
          <h2 class="p-achievement__items-title fadeUpTrigger"><?php the_title(); ?></h2>
        </a>
      <?php endwhile; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>