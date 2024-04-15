import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const openSidebarBtn = document.querySelector('.open-sidebar');
    const closeSidebarBtn = document.querySelector('.close-sidebar');
    const sidebar = document.querySelector('.sidebar');

    openSidebarBtn.addEventListener('click', function () {
        sidebar.classList.remove('hidden');
    });

    closeSidebarBtn.addEventListener('click', function () {
        sidebar.classList.add('hidden');
    });
});
