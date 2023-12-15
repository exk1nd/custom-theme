import Swiper from "swiper/swiper-bundle.min";

document.addEventListener("DOMContentLoaded", () => {
	initReviewsSlider();
});

function initReviewsSlider() {
	const sliderEls = document.querySelectorAll(".swiper-reviews");

	if (sliderEls.length) {
		Array.from(sliderEls).forEach(sliderEl => {
			const pagination = sliderEl.querySelector(".swiper-pagination");

			const swiper = new Swiper(sliderEl, {
				slidesPerView: "auto",
				centeredSlides: true,
				spaceBetween: 30,
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
					320: {
						spaceBetween: 10
					},
					768: {
						spaceBetween: 30
					}
				}
			});
		});
	}
}
