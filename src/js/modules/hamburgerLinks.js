document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById('menu__toggle');
    const menuItems = document.querySelectorAll('.menu-item-has-children');

    menuItems.forEach(item => {
        const menuItemLink = item.querySelector('a');

        menuItemLink.addEventListener('click', function(event) {
            if (window.innerWidth > 768) {
                // Для десктопа: переход по ссылке
                return true;
            } else {
                event.preventDefault();
                const subMenu = item.querySelector('.sub-menu');
                const allSubMenus = document.querySelectorAll('.sub-menu');

                allSubMenus.forEach(sub => {
                    if (sub !== subMenu) {
                        sub.classList.remove('active');
                    }
                });

                if (subMenu && subMenu.classList.contains('sub-menu')) {
                    if (subMenu.classList.contains('active')) {
                        subMenu.classList.remove('active');
                    } else {
                        subMenu.classList.add('active');
                    }
                }
            }
        });
    });

    menuToggle.addEventListener('change', function() {
        const menuBox = document.querySelector('.menu__box');
        if (this.checked) {
            menuBox.style.display = 'block'; // Показываем меню при клике на иконку
        } else {
            menuBox.style.display = 'none'; // Скрываем меню при повторном клике на иконку
        }
    });
});