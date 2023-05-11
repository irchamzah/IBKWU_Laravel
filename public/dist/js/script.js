// Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector("#to-top");

    if (window.pageYOffset > fixedNav) {
        // header.classList.add("navbar-fixed");
        toTop.classList.remove("hidden");
        toTop.classList.add("flex");
    } else {
        // header.classList.remove("navbar-fixed");
        toTop.classList.remove("flex");
        toTop.classList.add("hidden");
    }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// Layanan Dropdown
const layananDropdown = document.querySelector("#layanan_dropdown");
const layananMenu = document.querySelector("#layanan_menu");

layananDropdown.addEventListener("click", function () {
    layananMenu.classList.toggle("hidden");
});

// Klik di luar hamburger
// window.addEventListener("click", function (e) {
//     if (e.target != hamburger && e.target != navMenu) {
//         hamburger.classList.remove("hamburger-active");
//         navMenu.classList.add("hidden");
//     }
// });

// Darkmode toggle
const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");

darkToggle.addEventListener("click", function () {
    if (darkToggle.checked) {
        html.classList.add("dark");
        localStorage.theme = "dark";
    } else {
        html.classList.remove("dark");
        localStorage.theme = "light";
    }
});

// Pindahkan posisi toggle sesuai mode
if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    darkToggle.checked = true;
} else {
    darkToggle.checked = false;
}

// kategoriGaleri
const kategoriGaleri = document.querySelector("#kategoriGaleri");
const navMenuGaleri = document.querySelector("#navMenuGaleri");

kategoriGaleri.addEventListener("click", function () {
    kategoriGaleri.classList.toggle("kategoriGaleri-active");
    navMenuGaleri.classList.toggle("hidden");
});

// Klik di luar kategoriGaleri
window.addEventListener("click", function (e) {
    if (e.target != kategoriGaleri && e.target != navMenuGaleri) {
        kategoriGaleri.classList.remove("kategoriGaleri-active");
        navMenuGaleri.classList.add("hidden");
    }
});

//Show Modal
const modal = document.querySelector("#modal");
const showModal = document.querySelector("#show-modal");
const closeModal = document.querySelector("#close-modal");

showModal.addEventListener("click", function () {
    modal.classList.toggle("hidden");
});

closeModal.addEventListener("click", function () {
    modal.classList.add("hidden");
});
