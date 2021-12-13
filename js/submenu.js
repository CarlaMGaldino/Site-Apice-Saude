$(document).ready(function () {
  $("li#menu-item-59").mouseover(function () {
    $("li#menu-item-59 .sub-menu").addClass("hover-active");
    $("li#menu-item-60 .sub-menu").removeClass("hover-active");
  });
  $("li#menu-item-59 .sub-menu").mouseout(function () {
    $("li#menu-item-59 .sub-menu").removeClass("hover-active");
  });
  $("li#menu-item-60").mouseover(function () {
    $("li#menu-item-60 .sub-menu").addClass("hover-active");
    $("li#menu-item-59 .sub-menu").removeClass("hover-active");
  });
  $("li#menu-item-60 .sub-menu").mouseout(function () {
    $("li#menu-item-60 .sub-menu").removeClass("hover-active");
  });
  $("li#menu-item-59").click(function () {
    $("li#menu-item-59 .sub-menu").toggleClass("hover-active");
  });
  $("li#menu-item-60").click(function () {
    $("li#menu-item-60 .sub-menu").toggleClass("hover-active");
  });
  $(".menu-mobile-icon").click(function () {
    $(".menu-nav__lista-box1").toggleClass("menu-mobile-active");
  });
});
