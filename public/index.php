<!doctype html>
<html>

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
  <link rel="stylesheet" href="/asset_game-translates/css/first_view.css">
</head>

<body id="home" class="home">
  <div id="wrapper">
    <div id="first_view">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc-header.php"); ?>
      <section id="transtlate">
        <div class="transtlate_group">
          <div class="transtlate_group_inr">
            <div class="transtlate_block">
              <div class="transtlate_block_inr">
                <h2>翻訳する</h2>
                <p class="text">翻訳したい文章を貼り付けてください。</p>
                <div id="app">
                  <input v-model="text" @input="translate" />
                  <p class="output">{{ output }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div id="main_area" role="main">

    </div><!-- main_area -->


    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc-footer.php"); ?>
  </div><!-- wrapper -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc-spmenu.php"); ?>
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



  <script type="module">
    import {
      createApp
    } from "https://unpkg.com/vue@3.2.4/dist/vue.esm-browser.prod.js";

    const app = createApp({
      /* Vue.jsの各種処理 */

      data() {
        return {
          text: "This is a cat.",
          output: "これは猫です。"
        };
      },
      methods: {
        async translate() {
          const url = 'https://script.google.com/macros/s/AKfycby9cXKtga6lXC5-Hqxez9CYgUOScTGVPre1pawfeGpLmsLgtSpUgSfTzFCDJb5GkbdA/exec?text='
          this.output = await fetch(url + encodeURIComponent(this.text)).then((r) => r.text());
        }
      }

    });
    app.mount("#app");
  </script>
</body>

</html>