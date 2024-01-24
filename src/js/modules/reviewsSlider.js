import Swiper, {Navigation, Pagination} from "swiper";
Swiper.use([Navigation, Pagination])

document.addEventListener("DOMContentLoaded", () => {
	initReviewsSlider();
});

function initReviewsSlider() {
	const sliderEls = document.querySelectorAll(".swiper-reviews");

	if (sliderEls.length) {
		Array.from(sliderEls).forEach(sliderEl => {
			const pagination = sliderEl.querySelector(".swiper-pagination");
			const btnPrev = sliderEl.querySelector('.swiper-button-prev');
			const btnNext = sliderEl.querySelector('.swiper-button-next');


			const swiper = new Swiper(sliderEl, {
				slidesPerView: "auto",
				centeredSlides: true,
				spaceBetween: 30,
				loop: true,
				pagination: {
					el: pagination,
					clickable: true
				},
				navigation: {
					nextEl: btnNext,
					prevEl: btnPrev,
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
