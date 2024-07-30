<?php get_header(); ?>
<main>
  <section class="l-hero">
    <div class="l-hero__text">
      <h2>
        Lighting up the future<br />through electricity
      </h2>
      <p>
        電気を通じて、未来を照らします
      </p>
    </div>
  </section>
  <section class="p-top-about">
    <h2 class="c-section__title fadeUpTrigger">私たちについて</h2>
    <div class="p-top-about__inner">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top/about-01.jpg" class="flipLeftTrigger" alt="">
      <div class="p-top-about__text fadeUpTrigger">
        <p class="large">
          電気工事業を通して、<br />
          地域に貢献してまいります。
        </p>
        <p>
          私たち株式会社拓電は、電気工事に関するお困りごとを<br />
          プロならではの対応力とスピードで解決いたします。<br />
          「誠実・信頼」を基本理念とし、事業を通じての社会貢献を使命といたします。
        </p>
      </div>
    </div>
  </section>
  <section class="p-top-strong">
    <h2 class="c-section__title fadeUpTrigger">私たちの強み</h2>
    <!-- https://rakuden.co.jp/recruit/のworksのエリア -->
    <div class="p-top-strong__inner">
      <div class="p-top-strong__text fadeUpTrigger">
        弊社では、いかなる現場・規模・種類の電気工事においても高品質な施工を徹底的に追求いたします。<br>
        人びとの暮らしやお仕事にとって欠かせないライフラインである電気を活用し、より便利で快適な環境を構築します。<br>
        有資格者による丁寧な作業で、安心できる電気工事を確実にお届けします。<br>
        電気は扱いを間違えると危険な事故を招く恐れがありますので、シンプルな作業においてもけっして油断せず、万全な安全管理体制を整えております。<br>
        法人さま・個人さまを問わずご依頼やご相談を受け付けていますので、業者をお探しの方は弊社までお気軽にお問い合わせください。
      </div>
    </div>
  </section>
  <section class="p-top-banner">
    <ul>
      <li>
        <a href="<?php echo esc_url(home_url('business')); ?>" class="p-top-banner__btn fadeUpTrigger">
          業務内容についてはこちらから
        </a>
      </li>
      <li>
        <a href="<?php echo get_post_type_archive_link('achievement'); ?>" class="p-top-banner__btn fadeUpTrigger">
          施工実績についてはこちらから
        </a>
      </li>
    </ul>
  </section>
  <section class="p-top-recruit">
    <h2 class="c-section__title fadeUpTrigger">採用情報</h2>
    <p class="p-top-recruit__text fadeUpTrigger">
      わたしたちと一緒に働きませんか？<br />
      現在スタッフを募集しております。<br class="sp-only" />
      ご興味・関心を持たれた方はぜひ、こちらから募集要項をご覧ください。<br />
      また、ご不明な点などお気軽にお問い合わせください。<br class="sp-only" />スタッフ一同、お待ちしています。
    </p>
    <a href="<?php echo esc_url(home_url('recruit')); ?>" class="p-top-recruit__btn fadeUpTrigger">
      詳しく見る
    </a>
  </section>
</main>
<?php get_footer(); ?>