const pageHeader = document.querySelector(".page-header");
const openMobMenu = document.querySelector(".open-mobile-menu");
const closeMobMenu = document.querySelector(".close-mobile-menu");
const toggleSearchForm = document.querySelector(".search");
const searchForm = document.querySelector(".page-header form");
const topMenuWrapper = document.querySelector(".top-menu-wrapper");
const isVisible = "is-visible";
const showOffCanvas = "show-offcanvas";
const noTransition = "no-transition";
let resize;

openMobMenu.addEventListener("click", () => {
  topMenuWrapper.classList.add(showOffCanvas);
});

closeMobMenu.addEventListener("click", () => {
  topMenuWrapper.classList.remove(showOffCanvas);
});

toggleSearchForm.addEventListener("click", () => {
  searchForm.classList.toggle(isVisible);
});

window.addEventListener("resize", () => {
  pageHeader.querySelectorAll("*").forEach(function (el) {
    el.classList.add(noTransition);
  });
  clearTimeout(resize);
  resize = setTimeout(resizingComplete, 500);
});

function resizingComplete() {
  pageHeader.querySelectorAll("*").forEach(function (el) {
    el.classList.remove(noTransition);
  });
}
