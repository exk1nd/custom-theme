import Swiper, {Pagination} from "swiper";
Swiper.use([Pagination])

document.addEventListener("DOMContentLoaded", () => {
	initGridPostsSlider();
});

function initGridPostsSlider() {
	const sliderEls = document.querySelectorAll(".swiper-grid-posts");

	if (sliderEls.length) {
		Array.from(sliderEls).forEach(sliderEl => {
			const pagination = sliderEl.querySelector(".swiper-pagination");
			let swiper;
			let init = false;

			checkScreenSize();

			window.addEventListener("resize", checkScreenSize);

			function checkScreenSize() {
				if (window.innerWidth < 992) {
					if (!init) {
						init = true;
						swiper = new Swiper(sliderEl, {
							direction: "horizontal",
							slidesPerView: "auto",
							spaceBetween: 15,
							loop: true,
							pagination: {
								el: pagination,
								clickable: true
							},
							lazy: {
								loadPrevNext: true,
								loadPrevNextAmount: 3,
							},
							breakpoints: {
								768: {
									allowTouchMove: false
								}
							}
						});
					}
				} else {
					init = false;
					if (swiper) swiper.destroy();
				}
			}
		});
	}
}
