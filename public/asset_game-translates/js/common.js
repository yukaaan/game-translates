//#sp_menu_btnをクリックで#sp_menuを開閉
$("#sp_menu_btn").on("click", function () {
  $("#sp_menu_btn").toggleClass("active");
  $("#sp_menu").toggleClass("sp_menu_open");
  $("body").toggleClass("sp_menu_open");
});

//sp_menu プルダウンメニュー
$(".acc_menu").on("click", function () {
  $(this).toggleClass("open");
  $(this).children(".menu_panel").slideToggle();
});
