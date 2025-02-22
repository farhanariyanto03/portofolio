import "./bootstrap";
import gsap from "gsap";

document.addEventListener("DOMContentLoaded", function () {
    gsap.to(".home-box", {
        opacity: 1,
        scale: 1,
        duration: 1,
        ease: "power2.out",
    });
    gsap.to(".home-text", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });
    gsap.to(".home-image", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 0.7,
        ease: "power2.out",
    });

    document.querySelectorAll(".scale-btn").forEach((btn) => {
        btn.addEventListener("mouseenter", () => {
            gsap.to(btn, { scale: 1.1, duration: 0.3 });
        });
        btn.addEventListener("mouseleave", () => {
            gsap.to(btn, { scale: 1, duration: 0.3 });
        });
    });
});

document.getElementById("menu-btn").addEventListener("click", function () {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".tab-content");

    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            // Hapus semua kelas aktif dari tombol
            buttons.forEach((btn) => {
                btn.classList.remove("bg-teal-600");
                btn.classList.add("bg-gray-700");
            });

            // Tambahkan kelas aktif ke tombol yang diklik
            this.classList.remove("bg-gray-700");
            this.classList.add("bg-teal-600");

            // Sembunyikan semua tab content
            contents.forEach((content) => {
                content.classList.add("hidden");
            });

            // Tampilkan tab content yang sesuai
            const target = document.getElementById(this.dataset.tab);
            target.classList.remove("hidden");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    gsap.from("#title", {
        opacity: 0,
        y: -50,
        duration: 1,
        ease: "power2.out",
    });
    gsap.to("#card1", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });
    gsap.to("#card2", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });
    gsap.to("#card3", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1.1,
        ease: "power2.out",
    });
});
