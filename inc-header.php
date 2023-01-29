<header>
  <div id="header" role="banner">
    <div id="hd_logo">
      <div class="logo_inner">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php if (is_home() || is_front_page()) : ?><h1><span><img src="/wp-content/themes/game-translates/asset_game-translates/media/images/common/hd_logo.png" width="460" height="142" alt="ロゴマーク"></span></h1><?php else : ?><p><span><img src="/wp-content/themes/game-translates/asset_game-translates/media/images/common/hd_logo.png" width="86" height="62" alt="ロゴマーク"></span></p><?php endif; ?>
        </a>
      </div>
    </div>
   <div class="gnavi_wrap">
      <nav id="gnavi" role="navigation">
        <div class="gnavi_group left">
          <ul class="gnavi_group_ul gnavi_group_left_ul">
            <li><a href="">宿泊案内</a></li>
            <li><a href="">館内施設</a></li>
            <li><a href="">客室</a></li>
            <li><a href="">アパートメント</a></li>
            <li><a href="">アクセス</a></li>
            <li><a href="">新着情報</a></li>
          </ul>
        </div>
        <div class="gnavi_group right">
          <ul class="gnavi_group_ul gnavi_group_right_ul">
            <li><a href="">お問合せ</a></li>
            <li><a href="">宿泊予約</a></li>
          </ul>
        </div>
      </nav><!-- gnavi -->
      <div id="sp_menu_btn">
        <div class="sp_btn_cont">
          <span class="border01"></span>
          <span class="border02"></span>
          <span class="border03"></span>
        </div>
      </div><!-- sp_menu_btn -->
   </div>
  </div><!-- header -->
</header>