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
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/asset_game-translates/css/first_view.css");
  ?>
</head>