import './bootstrap';

document.getElementById('menu-btn').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".tab-content");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            // Hapus semua kelas aktif dari tombol
            buttons.forEach(btn => {
                btn.classList.remove("bg-teal-600");
                btn.classList.add("bg-gray-700");
            });

            // Tambahkan kelas aktif ke tombol yang diklik
            this.classList.remove("bg-gray-700");
            this.classList.add("bg-teal-600");

            // Sembunyikan semua tab content
            contents.forEach(content => {
                content.classList.add("hidden");
            });

            // Tampilkan tab content yang sesuai
            const target = document.getElementById(this.dataset.tab);
            target.classList.remove("hidden");
        });
    });
});
