// $(document).ready(function () {
//   $("li#menu-item-59").hover(
//     function () {
//       //When trigger is hovered...
//       $(this).children(".sub-menu").slideDown("fast");
//     },
//     function () {
//       $(this).children(".sub-menu").slideUp("slow");
//     }
//   );
// });

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
});
