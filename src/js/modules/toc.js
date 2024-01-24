document.addEventListener("DOMContentLoaded", () => {
    let dataAttribute = $("#tableblock").attr("data-page-id");

    $.ajax({
        type: "POST",
        url: wp_helper.ajax_url,
        data: {
            action: "toc_ajax_shortcode",
            postId: dataAttribute,
        },
        success: function (res) {
            let parent = document.querySelector("#tableblock");
            if (parent) {
                let headings = parent.querySelectorAll("h2");
                let toc = document.createElement("div");
                toc.innerHTML = res;

                let firstH2 = headings[0];
                if (firstH2) {
                    firstH2.parentNode.insertBefore(toc, firstH2);
                } else {
                    parent.appendChild(toc);
                }

                initTocWidget();

                let onThisPage = document.querySelector('.toc-widget h4');
                if (onThisPage) {
                    let tocList = document.querySelector('.toc-widget__list');
                    tocList.style.display = 'none';

                    // Добавляем иконку
                    let arrowIcon = document.createElement('span');
                    arrowIcon.textContent = '▼'; // Текстовая иконка
                    arrowIcon.style.marginLeft = '5px'; // Настройка отступов
                    onThisPage.appendChild(arrowIcon);

                    onThisPage.addEventListener('click', function() {
                        tocList.style.display = (tocList.style.display === 'none') ? 'block' : 'none';
                        // Меняем иконку при открытии/закрытии
                        arrowIcon.textContent = (tocList.style.display === 'none') ? '▼' : '▲';
                    });
                }
            }
        },
    });

    function initTocWidget() {
        let el = document.querySelector(".toc-widget__list");
        if (!el) return;
        let anchors = el.querySelectorAll("a");

        anchors.forEach((link) => {
            link.addEventListener("click", (event) => {
                event.preventDefault();
                if (document.body.classList.contains("toc-list-visible")) {
                    document.body.classList.remove("toc-list-visible");
                }
                if (link.hash) {
                    const target = document.querySelector(link.hash);
                    let headerHeight = document.querySelector("#header").offsetHeight;
                    let top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

                    window.scrollTo({
                        top: top,
                        behavior: "smooth",
                    });
                }
            });
        });
    }
});
