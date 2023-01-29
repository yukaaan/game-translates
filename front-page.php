<!doctype html>
<html <?php language_attributes(); ?> class="loading">

<head>
  <!-- GoogleAnalytics -->
  <?php
  $siteUrl = $_SERVER["HTTP_HOST"];
  if (strpos($siteUrl, '0000.co.jp') !== false) { ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="//www.google-analytics.com/urchin.js">
    </script>
    <script>
      _uacct = "UA-000000-00";
      urchinTracker();
    </script>
  <?php } else { ?>
    <!--テストサイト--><?php } ?>
  <!-- GoogleAnalytics -->
  <meta charset="utf-8">
  <?php $response_code = http_response_code();
  if ($response_code == 404) { ?>
    <meta name="robots" content="noindex">
  <?php } ?>
  <title>パズサバ翻訳</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=0">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta property="og:title" content="" />
  <meta property="og:type" content=" " />
  <meta property="og:url" content="" />
  <meta property="og:image" content="?>" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="ame); ?>" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="; ?>">
  <meta name="twitter:description" content="">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="stylesheet" href="/asset_game-translates/css/common.css">
</head>

<body id="home" class="home">
  <div id="wrapper">
    <div id="first_view">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/asset_prec/include/inc-header.php"); ?>
      <div id="home_kv">
        <div class="home_kv_inner">
          <div class="kv_slides swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="sp_none" src="/wp-content/themes/game-translates/asset_game-translates/media/images/home/main_kv_001.jpg" width="1600" height="800" alt="ホテル伊勢イースト外観">
              </div>
              <div class="swiper-slide">
                <img class="sp_none" src="/wp-content/themes/game-translates/asset_game-translates/media/images/home/main_kv_002.jpg" width="1600" height="800" alt="kv">
              </div>
              <div class="swiper-slide">
                <img class="sp_none" src="/wp-content/themes/game-translates/asset_game-translates/media/images/home/main_kv_003.jpg" width="1600" height="800" alt="kv">
              </div>
            </div>
          </div>
        </div><!-- home_kv_inner -->
      </div><!-- home_kv -->
    </div>

    <div id="main_area" role="main">
      <section id="onlineReservation">
        <div class="onlineReservation_group">
          <div class="onlineReservation_group_inr">
            <div class="onlineReservation_block">
              <div class="onlineReservation_block_inr">
                <h2>オンライン予約</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div><!-- main_area -->


    <?php include($_SERVER['DOCUMENT_ROOT'] . "/asset_prec/include/inc-footer.php"); ?>
  </div><!-- wrapper -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/asset_prec/include/inc-spmenu.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/asset_prec/include/inc-js.php"); ?>
  <script src="/wp-content/themes/game-translates/asset_game-translates/js/swiper_bundle.min.js"></script>
  <script>
    // アドレスバーを考慮ｈした100vh対策
    window.addEventListener("DOMContentLoaded", () => {
      const setFillHeight = () => {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty("--vh", `${vh}px`);
      };

      // リソース全て読み込み完了した時に高さを再計算する
      window.addEventListener("load", setFillHeight);
      // 画面のサイズ変動があった時に高さを再計算する
      window.addEventListener("resize", setFillHeight);

      // 初期化
      setFillHeight();
    });
  </script>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      new Swiper('.swiper', {
        slidesPerView: 1,
        //slidesPerView: 'auto', //必須
        centeredSlides: true, //1枚目のスライド
        loop: true,
        effect: 'fade',
        speed: 600,
        lazy: true,
        speed: 3000, // 2秒かけてフェード
        autoplay: {
          delay: 7000, //5秒後に次のスライドへ
        },
      });
    });
  </script>
</body>

</html>