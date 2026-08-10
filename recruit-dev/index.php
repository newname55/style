<?php
// セクキャバ求人LP（開発中）
// 現在は 01_hero 〜 09_line-cta のみ実装。10 以降は未実装。
$asset_ver = '20260809-11';
$line_url  = 'https://line.me/R/ti/p/%40pdz2759q'; // LINE公式アカウント（@pdz2759q）
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>セクキャバってどんなところ？｜STYLE（スタイル）求人 やさしく解説</title>
<meta name="description" content="セクキャバが初めての方へ。STYLE（スタイル）のお店の雰囲気、働き方、接客の流れをやさしく解説します。仕事内容を聞くだけでも大丈夫です。">
<meta name="robots" content="noindex, nofollow">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#fff5f8">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B4N6NQSVRD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-B4N6NQSVRD');
</script>
<link rel="stylesheet" href="assets/css/lp.css?v=<?php echo $asset_ver; ?>">
</head>
<body>

<header class="lp-header">
  <a class="lp-header-logo" href="../recruit.html" aria-label="STYLE求人ページへ戻る">
    <img src="../assets/images/logo.webp" alt="STYLE（スタイル）求人" width="72" height="72">
  </a>
  <p class="lp-header-label">STYLEのお仕事を知るページ</p>
</header>

<main id="main">

  <!-- ============================================================
       01_hero
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="hero" aria-labelledby="hero-title">

    <!-- 背景装飾（すべて装飾目的・読み上げ対象外） -->
    <div class="hero__deco" aria-hidden="true">
      <span class="deco deco--heart deco--h1"></span>
      <span class="deco deco--heart deco--h2"></span>
      <span class="deco deco--heart deco--h3"></span>
      <span class="deco deco--spark deco--s1"></span>
      <span class="deco deco--spark deco--s2"></span>
      <span class="deco deco--spark deco--s3"></span>
      <span class="deco deco--spark deco--s4"></span>
    </div>

    <div class="hero__inner">

      <!-- 1. 小さなキャッチ -->
      <p class="hero__catch"><span>STYLEってどんなお店？</span></p>

      <!-- 2. メインタイトル -->
      <h1 class="hero__title" id="hero-title">
        <span class="hero__title-line hero__title-line--pink">セクキャバって、</span>
        <span class="hero__title-line">どんなところ？</span>
      </h1>

      <!-- 3. サブコピー -->
      <p class="hero__sub">STYLEのお店の雰囲気や働き方を、<br class="u-br-sp">初めての方にもやさしくご案内します。</p>

      <!-- 4. キャラクター ＋ 補足リボン -->
      <figure class="hero__figure">
        <div class="hero__figure-glow" aria-hidden="true"></div>
        <img
          class="hero__heroine"
          src="assets/heroine/hero.webp"
          alt="指を口元に当て、少し不安そうだけど興味津々な表情を浮かべる、ナイトワーク未経験の20代の女性のイラスト"
          width="900" height="1350"
          decoding="async"
          fetchpriority="high">
        <figcaption class="hero__ribbon">STYLEで働く前に知りたいことをやさしく解説<span class="u-heart" aria-hidden="true">♡</span></figcaption>
      </figure>

      <!-- 5. 安心ポイント -->
      <ul class="hero__points" aria-label="お仕事の安心ポイント">
        <li class="hero__point">未経験OK</li>
        <li class="hero__point">体験入店OK</li>
        <li class="hero__point">送迎あり</li>
        <li class="hero__point">日払いOK</li>
      </ul>

      <!-- 6. LINE CTA -->
      <div class="hero__cta">
        <p class="hero__cta-lead">まずは気軽に聞いてみてください<span class="u-heart" aria-hidden="true">♡</span></p>
        <a class="btn-line" href="<?php echo htmlspecialchars($line_url, ENT_QUOTES, 'UTF-8'); ?>">
          <span class="btn-line__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" focusable="false"><path fill="currentColor" d="M12 3C6.9 3 2.8 6.4 2.8 10.6c0 3.8 3.3 6.9 7.7 7.5.3.06.7.2.8.46.1.24.07.6.03.85l-.13.8c-.04.24-.19.93.81.51 1-.42 5.4-3.2 7.37-5.47 1.36-1.5 2.01-3 2.01-4.65C21.4 6.4 17.3 3 12 3Z"/></svg>
          </span>
          <span class="btn-line__label">LINEで質問してみる</span>
        </a>
        <p class="hero__cta-note">24時間受付中／お仕事の質問だけでもOK</p>
      </div>

      <!-- スクロール誘導 -->
      <p class="hero__scroll" aria-hidden="true"><span>もっと見る</span></p>

    </div>
  </section>
  <!-- /01_hero -->

  <!-- ============================================================
       02_what-is-sexy-cabaret
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="what-is" aria-labelledby="what-is-title">
    <div class="what-is__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch what-is__label"><span>まずはここから</span></p>

      <!-- 2. 見出し -->
      <h2 class="what-is__title" id="what-is-title">
        <span class="what-is__title-heart" aria-hidden="true">♡</span>
        セクキャバってどんなところ？
        <span class="what-is__title-heart" aria-hidden="true">♡</span>
      </h2>

      <p class="what-is__lead">
        STYLEでは、お酒を作ったりお客様との会話を楽しんだりしながら、店内で楽しい時間をつくるお仕事です。接客の流れやお店のルールは、はじめに分かりやすくご案内します。
      </p>

      <!-- 3. 説明カード -->
      <ul class="what-is__cards">
        <li class="what-is__card">
          <span class="what-is__card-icon" aria-hidden="true">♡</span>
          <p class="what-is__card-text">お酒と会話を楽しむお仕事</p>
        </li>
        <li class="what-is__card">
          <span class="what-is__card-icon" aria-hidden="true">♡</span>
          <p class="what-is__card-text">お客様との距離が近い接客</p>
        </li>
        <li class="what-is__card">
          <span class="what-is__card-icon" aria-hidden="true">♡</span>
          <p class="what-is__card-text">STYLEのルールを確認してから</p>
        </li>
      </ul>

      <!-- 4. 小さな安心メッセージ -->
      <div class="what-is__note">
        <img
          class="what-is__note-avatar"
          src="assets/heroine/hero.webp"
          alt=""
          width="900" height="1350"
          loading="lazy"
          decoding="async">
        <div class="what-is__note-bubble">
          <p class="what-is__note-text">働く前に、仕事内容とお店の雰囲気を確認できます。</p>
          <p class="what-is__note-sub">分からないことや不安なことは、LINEでいつでも聞けます<span class="u-heart" aria-hidden="true">♡</span></p>
        </div>
      </div>

    </div>
  </section>
  <!-- /02_what-is-sexy-cabaret -->

  <!-- ============================================================
       03_conversation-anxiety
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="talk" aria-labelledby="talk-title">
    <div class="talk__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch talk__label"><span>私にもできる？</span></p>

      <!-- 2. 見出し -->
      <h2 class="talk__title" id="talk-title">話すのが得意じゃなくても、<br>大丈夫。</h2>

      <p class="talk__lead">
        キャバクラは会話を盛り上げる力が大切。<br class="u-br-sp">
        でもセクキャバでは、ずっと話し続けることだけが接客ではありません。
      </p>
      <p class="talk__supplement">
        お客様との距離感や、やさしい雰囲気づくりも大切なお仕事です。
      </p>

      <!-- 3. 比較カード -->
      <div class="talk__compare">
        <div class="talk__compare-card talk__compare-card--general">
          <p class="talk__compare-label">一般的な<br class="u-br-sp">キャバクラ</p>
          <p class="talk__compare-text">会話を盛り上げる<br class="u-br-sp">力が大切</p>
        </div>
        <div class="talk__compare-card talk__compare-card--sexykyaba">
          <p class="talk__compare-label">セクキャバ</p>
          <p class="talk__compare-text">会話＋ムード作り<br class="u-br-sp">が大切</p>
        </div>
      </div>

      <!-- 4. ふんわりしたアイコン表現 -->
      <ul class="talk__traits" aria-label="接客で大切にされる要素">
        <li class="talk__trait"><span class="talk__trait-icon" aria-hidden="true">💬</span><span class="talk__trait-label">会話</span></li>
        <li class="talk__trait"><span class="talk__trait-icon" aria-hidden="true">😊</span><span class="talk__trait-label">笑顔</span></li>
        <li class="talk__trait"><span class="talk__trait-icon" aria-hidden="true">👂</span><span class="talk__trait-label">聞き上手</span></li>
        <li class="talk__trait"><span class="talk__trait-icon" aria-hidden="true">✨</span><span class="talk__trait-label">雰囲気づくり</span></li>
      </ul>

      <!-- 小さな結論 -->
      <p class="talk__highlight">
        “聞き上手”や“雰囲気づくりが得意”な人にも向いています<span class="u-heart" aria-hidden="true">♡</span>
      </p>

      <!-- 5. 安心メッセージ -->
      <div class="talk__note">
        <span class="talk__note-icon" aria-hidden="true">♡</span>
        <p class="talk__note-text">未経験でも、最初に接客の流れを説明します。</p>
      </div>

    </div>
  </section>
  <!-- /03_conversation-anxiety -->

  <!-- ============================================================
       04_difference-from-health-service
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="health" aria-labelledby="health-title">
    <div class="health__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch health__label"><span>STYLEで安心して働くために</span></p>

      <!-- 2. 見出し -->
      <h2 class="health__title" id="health-title">STYLEは店舗内での接客です</h2>

      <p class="health__lead">
        初めて聞くお仕事だからこそ、不安なことがあって当然です。<br class="u-br-sp">
        STYLEでは、勤務する店内で接客の流れやルールを確認できます。
      </p>
      <p class="health__body">
        勤務はSTYLEの店内で行います。<br class="u-br-sp">
        店内にはスタッフがいるので、分からないことや困ったこともすぐに相談できます。
      </p>

      <!-- 3. 安心カード -->
      <ul class="health__cards">
        <li class="health__card">
          <span class="health__card-icon" aria-hidden="true"></span>
          <p class="health__card-text">勤務はSTYLEの店内です</p>
        </li>
        <li class="health__card">
          <span class="health__card-icon" aria-hidden="true"></span>
          <p class="health__card-text">接客の流れを最初に確認</p>
        </li>
        <li class="health__card">
          <span class="health__card-icon" aria-hidden="true"></span>
          <p class="health__card-text">困ったときはスタッフに相談</p>
        </li>
      </ul>

      <!-- 4. やさしい説明文 -->
      <p class="health__summary">お酒・会話・距離の近い接客を、STYLEの店内で</p>

      <!-- 5. 安心メッセージ -->
      <div class="health__note">
        <span class="health__note-icon" aria-hidden="true">♡</span>
        <p class="health__note-text">不安な点は、体験前にお店のルールと一緒に確認できます。</p>
      </div>

    </div>
  </section>
  <!-- /04_difference-from-health-service -->

  <!-- ============================================================
       05_benefits
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="benefits" aria-labelledby="benefits-title">
    <div class="benefits__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch benefits__label"><span>安心ポイント</span></p>

      <!-- 2. 見出し -->
      <h2 class="benefits__title" id="benefits-title">はじめてでも<br class="u-br-sp">働きやすい理由</h2>

      <p class="benefits__lead">
        不安がある方でも始めやすいように、<br class="u-br-sp">
        体験入店や日払い、送迎などを用意しています。
      </p>

      <!-- 4. 8項目の2列グリッド -->
      <ul class="benefits__grid" aria-label="待遇・条件">
        <li class="benefits__item">未経験OK</li>
        <li class="benefits__item">体験入店OK</li>
        <li class="benefits__item">日払いOK</li>
        <li class="benefits__item">送迎あり</li>
        <li class="benefits__item">週1日OK</li>
        <li class="benefits__item">WワークOK</li>
        <li class="benefits__item">ノルマなし</li>
        <li class="benefits__item">衣装レンタルあり</li>
      </ul>

      <!-- 5. 小さな安心メッセージ -->
      <div class="benefits__note">
        <img
          class="benefits__note-avatar"
          src="assets/heroine/hero.webp"
          alt=""
          width="900" height="1350"
          loading="lazy"
          decoding="async">
        <div class="benefits__note-bubble">
          <p class="benefits__note-text">待遇や働き方のことも、LINEで確認できます<span class="u-heart" aria-hidden="true">♡</span></p>
        </div>
      </div>

    </div>
  </section>
  <!-- /05_benefits -->

  <!-- ============================================================
       06_salary
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="salary" aria-labelledby="salary-title">
    <div class="salary__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch salary__label"><span>お給料のこと</span></p>

      <!-- 2. 見出し -->
      <h2 class="salary__title" id="salary-title">実際どれくらい<br class="u-br-sp">もらえるの？</h2>

      <p class="salary__lead">
        時給・バック・日払いのことも、<br class="u-br-sp">
        事前に分かりやすく確認できます。
      </p>

      <!-- 4. 給与条件カード -->
      <ul class="salary__grid" aria-label="給与条件">
        <li class="salary__card">
          <p class="salary__card-label">体験時給</p>
          <p class="salary__card-value">時給4,000円<br class="u-br-sp">以上可能</p>
        </li>
        <li class="salary__card">
          <p class="salary__card-label">通常時給</p>
          <p class="salary__card-value">時給4,000円<br class="u-br-sp">以上可能</p>
        </li>
        <li class="salary__card">
          <p class="salary__card-label">各種バック</p>
          <p class="salary__card-value">あり</p>
        </li>
        <li class="salary__card">
          <p class="salary__card-label">日払い</p>
          <p class="salary__card-value">OK</p>
        </li>
      </ul>

      <!-- 5. 1日イメージカード -->
      <div class="salary__example">
        <p class="salary__example-badge">たとえば5時間働いた場合</p>
        <div class="salary__example-rows">
          <p class="salary__example-row">時給 4,000円 × 5時間</p>
          <p class="salary__example-row">＋ 各種バック</p>
          <p class="salary__example-row salary__example-row--total">＝ 日給25,000円以上可能</p>
        </div>
        <p class="salary__example-caption">詳しい金額は、LINEまたは体験前の説明で確認できます。</p>
      </div>

      <!-- 6. 安心メッセージ -->
      <div class="salary__note">
        <span class="salary__note-icon" aria-hidden="true">♡</span>
        <p class="salary__note-text">金額のことも、遠慮なく聞いてください。</p>
      </div>

    </div>
  </section>
  <!-- /06_salary -->

  <!-- ============================================================
       07_trial-story
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="story" aria-labelledby="story-title">
    <div class="story__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch story__label"><span>体験の流れ</span></p>

      <!-- 2. 見出し -->
      <h2 class="story__title" id="story-title">体験入店って、<br class="u-br-sp">どんな流れ？</h2>

      <p class="story__lead">
        いきなり入店を決めなくても大丈夫。<br class="u-br-sp">
        まずは仕事内容を聞いて、体験してから考えられます。
      </p>

      <!-- 4. 7ステップの縦タイムライン -->
      <ol class="story__timeline">
        <li class="story__step"><span class="story__step-num">1</span><p class="story__step-text">LINEで質問</p></li>
        <li class="story__step"><span class="story__step-num">2</span><p class="story__step-text">日程を相談</p></li>
        <li class="story__step"><span class="story__step-num">3</span><p class="story__step-text">来店・仕事内容の説明</p></li>
        <li class="story__step"><span class="story__step-num">4</span><p class="story__step-text">着替え・準備</p></li>
        <li class="story__step"><span class="story__step-num">5</span><p class="story__step-text">体験入店</p></li>
        <li class="story__step"><span class="story__step-num">6</span><p class="story__step-text">お給料受け取り</p></li>
        <li class="story__step story__step--last"><span class="story__step-num">7</span><p class="story__step-text">入店するかは後で決めてOK</p></li>
      </ol>

      <!-- 5. 強調カード -->
      <div class="story__highlight">
        <p class="story__highlight-text">体験＝入店ではありません</p>
      </div>

      <!-- 6. 安心メッセージ -->
      <div class="story__note">
        <img
          class="story__note-avatar"
          src="assets/heroine/hero.webp"
          alt=""
          width="900" height="1350"
          loading="lazy"
          decoding="async">
        <div class="story__note-bubble">
          <p class="story__note-text">仕事内容を聞いて、納得してから体験できます。</p>
        </div>
      </div>

    </div>
  </section>
  <!-- /07_trial-story -->

  <!-- ============================================================
       08_faq
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="faq" aria-labelledby="faq-title">
    <div class="faq__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch faq__label"><span>気になること</span></p>

      <!-- 2. 見出し -->
      <h2 class="faq__title" id="faq-title">よくある質問</h2>

      <p class="faq__lead">
        気になることは、応募前に確認して大丈夫。<br class="u-br-sp">
        不安なことはLINEでも相談できます。
      </p>

      <!-- 4. FAQアコーディオン -->
      <div class="faq__list">
        <details class="faq__item">
          <summary class="faq__question">未経験でも大丈夫ですか？</summary>
          <p class="faq__answer">大丈夫です。仕事内容や接客の流れは、はじめに分かりやすくご案内します。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">体験だけでもできますか？</summary>
          <p class="faq__answer">はい。体験＝入店ではありません。実際に体験してから、続けるかどうかを考えられます。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">友達と一緒に応募できますか？</summary>
          <p class="faq__answer">友達同士での相談も大丈夫です。一緒に体験できるかなど、事前に確認できます。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">お酒が苦手でも大丈夫ですか？</summary>
          <p class="faq__answer">お酒が苦手な方も、まずはご相談ください。無理なく働けるかを事前に確認できます。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">送迎はありますか？</summary>
          <p class="faq__answer">送迎については対応エリアがあります。詳しくはLINEで確認してください。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">どんな服装で行けばいいですか？</summary>
          <p class="faq__answer">体験時の服装や準備するものは、事前に分かりやすくお伝えします。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">身バレが心配です。</summary>
          <p class="faq__answer">プライバシー面が不安な方も、面接・体験前にご相談ください。</p>
        </details>
        <details class="faq__item">
          <summary class="faq__question">仕事内容を聞いてから決めてもいいですか？</summary>
          <p class="faq__answer">もちろん大丈夫です。仕事内容とお店のルールを確認して、納得してから体験できます。</p>
        </details>
      </div>

    </div>
  </section>
  <!-- /08_faq -->

  <!-- ============================================================
       09_line-cta
       ※ 10 以降のセクションは未実装
       ============================================================ -->
  <section class="cta" aria-labelledby="cta-title">

    <!-- 背景装飾（すべて装飾目的・読み上げ対象外。01_heroと同じ意匠を再利用し締めくくりの余韻を出す） -->
    <div class="hero__deco" aria-hidden="true">
      <span class="deco deco--heart deco--h1"></span>
      <span class="deco deco--spark deco--s1"></span>
      <span class="deco deco--spark deco--s2"></span>
    </div>

    <div class="cta__inner">

      <!-- 1. 小さなラベル -->
      <p class="hero__catch cta__label"><span>最後に</span></p>

      <!-- 2. 見出し -->
      <h2 class="cta__title" id="cta-title">まずは質問だけでも<span class="cta__title-nowrap">大丈夫<span class="u-heart" aria-hidden="true">♡</span></span></h2>

      <p class="cta__lead">
        仕事内容・お給料・体験入店のこと。<br class="u-br-sp">
        気になることをLINEで気軽に聞いてください。
      </p>

      <!-- 4. キャラクター丸アイコン＋吹き出し -->
      <div class="cta__note">
        <img
          class="cta__note-avatar"
          src="assets/heroine/hero.webp"
          alt=""
          width="900" height="1350"
          loading="lazy"
          decoding="async">
        <div class="cta__note-bubble">
          <p class="cta__note-text">聞いてから決めても大丈夫です<span class="u-heart" aria-hidden="true">♡</span></p>
        </div>
      </div>

      <!-- 5. 安心チェックリスト -->
      <ul class="cta__checklist" aria-label="ご安心いただきたいポイント">
        <li class="cta__check">応募するかは話を聞いてからでOK</li>
        <li class="cta__check">体験入店の相談だけでもOK</li>
        <li class="cta__check">不安なことを先に確認できます</li>
      </ul>

      <!-- 6. LINE CTA -->
      <div class="cta__button-wrap">
        <a class="btn-line" href="<?php echo htmlspecialchars($line_url, ENT_QUOTES, 'UTF-8'); ?>">
          <span class="btn-line__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" focusable="false"><path fill="currentColor" d="M12 3C6.9 3 2.8 6.4 2.8 10.6c0 3.8 3.3 6.9 7.7 7.5.3.06.7.2.8.46.1.24.07.6.03.85l-.13.8c-.04.24-.19.93.81.51 1-.42 5.4-3.2 7.37-5.47 1.36-1.5 2.01-3 2.01-4.65C21.4 6.4 17.3 3 12 3Z"/></svg>
          </span>
          <span class="btn-line__label">LINEで質問してみる</span>
        </a>
        <p class="cta__button-note">24時間受付中</p>
      </div>

      <!-- 7. 小さな注記 -->
      <p class="cta__footnote">気になることを先に聞いてから、体験するか決められます。</p>

      <!-- 8. 問い合わせ情報・応募資格 -->
      <div class="cta__contact">
        <dl class="cta__contact-list">
          <div class="cta__contact-row">
            <dt class="cta__contact-label">採用担当</dt>
            <dd class="cta__contact-value"><a class="cta__contact-link" href="tel:090-3372-2991">090-3372-2991</a></dd>
          </div>
          <div class="cta__contact-row">
            <dt class="cta__contact-label">求人用LINE</dt>
            <dd class="cta__contact-value">@pdz2759q</dd>
          </div>
          <div class="cta__contact-row">
            <dt class="cta__contact-label">店舗電話</dt>
            <dd class="cta__contact-value"><a class="cta__contact-link" href="tel:086-226-6766">086-226-6766</a></dd>
          </div>
          <div class="cta__contact-row">
            <dt class="cta__contact-label">営業時間</dt>
            <dd class="cta__contact-value">19:00〜LAST</dd>
          </div>
          <div class="cta__contact-row">
            <dt class="cta__contact-label">定休日</dt>
            <dd class="cta__contact-value">日曜日</dd>
          </div>
        </dl>
        <p class="cta__contact-eligibility">応募資格：18歳以上 / 学生不可</p>
      </div>

    </div>
  </section>
  <!-- /09_line-cta -->

</main>

<footer class="lp-footer">
  <p class="lp-footer-brand">STYLE（スタイル）求人専用ページ</p>
  <p class="lp-footer-address">岡山市北区柳町1-9-8 柳町65ビル 2F</p>
  <p class="lp-footer-hours">営業時間 19:00〜LAST / 日曜定休</p>
  <div class="lp-footer-links">
    <a href="../index.html">店舗サイトを見る</a>
    <a href="../recruit.html">STYLE求人ページへ</a>
  </div>
</footer>

</body>
</html>
