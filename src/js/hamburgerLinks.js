document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger-menu');
    let menuItems = hamburger.querySelectorAll('.menu-item-has-children > a');

    let used = null;

    menuItems.forEach(item => {
        item.addEventListener('click', (e) => {
            if (used !== item) {
                e.preventDefault();
                used = item;
            }
        })
    });
});