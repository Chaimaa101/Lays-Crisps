let open = document.querySelector("#menu");
let navMobile = document.querySelector(".nav-mobile");
let close = document.querySelector("#menu-x");

console.log(open);
console.log(navMobile);
console.log(close);

open.addEventListener("click", () => {
  navMobile.classList.add("open");
});
close.addEventListener("click", () => {
  navMobile.classList.remove("open");
});

let date = new Date();

let year = date.getFullYear();

document.querySelector(".year").innerHTML = year;
