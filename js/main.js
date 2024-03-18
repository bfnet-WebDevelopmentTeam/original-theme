"use strict";
{
  // ハンバーガーメニュー
  const toggle = document.getElementById("hamburger");
  const toggleLine = document.getElementById("btn-line");
  const headerNav = document.getElementById("header-nav");

  toggle.addEventListener("click", function () {
    toggleLine.classList.toggle("open");
    headerNav.classList.toggle("open");
  });
}
