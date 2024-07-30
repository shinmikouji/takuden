<?php /* Template Name: 採用お問い合わせ */ ?>
<?php get_header(); ?>
<main>
  <section class="p-recruit-contact__fv">
    <div class="p-recruit-contact__fv-inner">
      <h2 class="p-recruit-contact__fv-title">お問い合わせフォーム</h2>
    </div>
  </section>
  <?php echo do_shortcode('[contact-form-7 id="581b3d1" title="採用フォーム"]'); ?>
  <section class="c-contactArea">
    <div class="c-contactArea__container">
      <div class="c-contactArea__inner">
        <h3 class="c-contactArea__title">採用情報</h3>
        <p class="c-contactArea__text">
          弊社では、随時電気工事士を募集しております。
          <br>
          お気軽にエントリーください！
        </p>
        <div class="c-contactArea__button">
          <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報はこちら</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>