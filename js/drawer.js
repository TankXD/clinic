const drawerBtn = jQuery("#js-drawer-button");
const drawerMenu = jQuery("#js-drawer-menu");

// drawerBtn 클릭하면 drawerBtn에 is-open 클래스 추가
// drawerMenu에 is-open 클래스 추가
drawerBtn.on("click", function (e) {
  e.preventDefault();
  drawerBtn.toggleClass("is-open");
  drawerMenu.toggleClass("is-open");
  drawerMenu.fadeToggle();
});
