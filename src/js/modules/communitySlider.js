import Swiper, {Navigation} from "swiper";
Swiper.use([Navigation]);

document.addEventListener("DOMContentLoaded", () => {
	initCommunitySlider();
});
window.addEventListener("resize", () => {
	initCommunitySlider();
});

function initCommunitySlider() {
	const sliderEls = document.querySelectorAll(".swiper-community");

	if (sliderEls.length) {
		Array.from(sliderEls).forEach(sliderEl => {
			const btnPrev = sliderEl.querySelector(".swiper-button-prev");
			const btnNext = sliderEl.querySelector(".swiper-button-next");

			const swiper = new Swiper(sliderEl, {
				direction: "horizontal",
				slidesPerView: 'auto',
				spaceBetween: 9,
				loop: false,
				navigation: {
					nextEl: btnNext,
					prevEl: btnPrev,
				},
				breakpoints: {
					320: {
						spaceBetween: 0,
						centeredSlides: true,
						initialSlide: 2,
					},
					991: {
						initialSlide: 0,
						spaceBetween: 9,
						centeredSlides: false,
					}
				}
			});
			if (window.innerWidth > 990) {
				swiper.changeLanguageDirection("rtl");
			}
		});
	}
}