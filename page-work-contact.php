<?php /* Template Name: お仕事お問い合わせ */ ?>
<?php get_header(); ?>
<main>
  <section class="p-work-contact__fv">
    <div class="p-work-contact__fv-inner">
      <h2 class="p-work-contact__fv-title">お問い合わせフォーム</h2>
    </div>
  </section>
  <?php echo do_shortcode('[contact-form-7 id="dceca47" title="お仕事フォーム"]'); ?>
</main>
<?php get_footer(); ?>