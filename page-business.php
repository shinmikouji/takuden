<?php /* Template Name:業務内容 */ ?>
<?php get_header(); ?>
<main>
  <section class="p-business__fv">
    <div class="p-business__fv-inner">
      <h2 class="p-business__fv-title">業務内容</h2>
    </div>
  </section>
  <section class="p-business">
    <div class="p-business__inner">
      <h3 class="c-section__title fadeUpTrigger">活動内容</h3>
      <p class="fadeUpTrigger">
        株式会社拓電は京都府宇治市に拠点をおき、<br class="sp-only">近畿一円で活動しています。<br>
        マンション・ビル・商業施設・店舗・公共施設などの<br class="sp-only">あらゆる建築物を対象に、<br>電気工事の設計・施工・メンテナンス・アフターフォローを<br class="sp-only">請け負っております。<br class="sp-only">
        弊社が手がける主な電気工事をご紹介します。<br>
        近畿圏以外からのご依頼、下記内容以外のご相談にも柔軟に対応いたします。電気工事の施工業者をお探しの方は、<br class="sp-only">ぜひ一度弊社にご連絡ください。
      </p>
    </div>
  </section>
  <section class="p-business-type">
    <div class="p-business-type__inner">
      <h3 class="c-section__title fadeUpTrigger">総合電気設備工事</h3>
      <ul class="p-business-type__list">
        <li>
          <div>
            <h3 class="fadeUpTrigger">引込設備工事</h3>
            <p class="fadeUpTrigger">
              電力会社から供給された電力を建物の内部で使用するために、引き込み点から高圧ケーブルや低圧ケーブルを敷設して引込開閉器盤までつなげます。より多くの方々に、電気を便利・安全に使用していただくための最初の工事です。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/business-01.jpg" class="flipLeftTrigger" alt="">
        </li>
        <li>
          <div>
            <h3 class="fadeUpTrigger">幹線設備工事</h3>
            <p class="fadeUpTrigger">電力を引き込んだ後は、施設内の隅々まで行き渡らせるための工事が必要です。分電盤や動力盤を介して幹線を整備いたします。室内外に張り巡らせた配線を通じて、正しい容量の電力を供給します。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/business-02.jpg" class="flipLeftTrigger" alt="">
        </li>
        <li>
          <div>
            <h3 class="fadeUpTrigger">動力設備工事</h3>
            <p class="fadeUpTrigger">エアコンやモーターのほか、溶接機・フライス・旋盤といった業務用の設備が動力設備です。これらが安定的に稼働するよう、鋼管・ダクト・ケーブルラック・警報機などを整備いたします。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/business-03.jpg" class="flipLeftTrigger" alt="">
        </li>
        <li>
          <div>
            <h3 class="fadeUpTrigger">配線工事</h3>
            <p class="fadeUpTrigger">動線や建物の構造、利用者のみなさまの安全性を十分計算し、安心して電気を使用できる配線環境を構築します。豊富な知識をもつ熟練の技術者が、見えない部分まで心を込めて施工いたします。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/business/business-04.jpg" class="flipLeftTrigger" alt="">
        </li>
      </ul>
    </div>
  </section>
  <section class="c-contactArea">
    <div class="c-contactArea__container">
      <div class="c-contactArea__inner">
        <h3 class="c-contactArea__title fadeUpTrigger">お問い合わせ</h3>
        <p class="c-contactArea__text fadeUpTrigger">
          電気工事を通じて、全ての人に納得いただけるよう、<br class="sp-only">最後まで創りあげます。<br>
          お住まい施工/商業施設の施工に関することは<br class="sp-only">お気軽にお問い合わせください。
        </p>
        <div class="c-contactArea__button fadeUpTrigger">
          <a href="<?php echo esc_url(home_url('work-contact')); ?>">お問い合わせはこちらから</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>