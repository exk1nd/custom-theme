import Swiper from "swiper/swiper-bundle.min";

const swiperObj = {
	leftSwiper: null,
	rightSwiper: null,
	swiperDeskInit: null,
};

window.addEventListener("DOMContentLoaded", () => {

	if (window.innerWidth > 1150) {
		initDeskSwipers();

	} else {
		initMobSwipers();
	}


	window.addEventListener("resize", () => {
		if (window.innerWidth > 1150 && swiperObj.swiperDeskInit === false) {
			swiperObj.leftSwiper.destroy();
			swiperObj.rightSwiper.destroy();
			initDeskSwipers();

		} else if (window.innerWidth <= 1150 && swiperObj.swiperDeskInit === true) {
			swiperObj.leftSwiper.destroy();
			swiperObj.rightSwiper.destroy();
			initMobSwipers();
		}
	});

	function initDeskSwipers() {
		swiperObj.leftSwiper = new Swiper(".left-swiper", {
			direction: "vertical",
			slidesPerView: "auto",
			spaceBetween: 19,
			loop: true,
			mousewheel: {
				sensitivity: 1,
			},
			autoHeight: true,
			autoplay: {
				delay: 3000,
			},
		});

		swiperObj.rightSwiper = new Swiper(".right-swiper", {
			direction: "vertical",
			slidesPerView: "auto",
			loop: true,
			spaceBetween: 19,
			mousewheel: {
				sensitivity: 1,
			},
			autoHeight: true,
			autoplay: {
				delay: 3000,
			},
		});

		swiperObj.leftSwiper.controller.control = swiperObj.rightSwiper;
		swiperObj.rightSwiper.controller.control = swiperObj.leftSwiper;

		swiperObj.swiperDeskInit = true;
	}

	function initMobSwipers() {
		swiperObj.leftSwiper = new Swiper(".left-swiper", {
			slidesPerView: 3,
			spaceBetween: 10,
			loop: true,
			mousewheel: {
				sensitivity: 1,
			},
			centeredSlides: true,
			breakpoints: {
				100: {
					slidesPerView: 1.4,
					spaceBetween: 10,
				},
				470: {
					slidesPerView: 1.7,
				},
				600: {
					slidesPerView: 2.2,
				},
				900: {
					slidesPerView: 3,
				},
			},
			autoplay: {
				delay: 3000,
			},
		});

		swiperObj.rightSwiper = new Swiper(".right-swiper", {
			slidesPerView: 3,
			loop: true,
			spaceBetween: 10,
			centeredSlides: true,
			mousewheel: {
				sensitivity: 1,
			},
			breakpoints: {
				100: {
					slidesPerView: 1.4,
					spaceBetween: 10,
				},
				470: {
					slidesPerView: 1.7,
				},
				600: {
					slidesPerView: 2.2,
				},
				900: {
					slidesPerView: 3,
				},
			},
			autoplay: {
				delay: 3000,
			},
		});

		swiperObj.leftSwiper.controller.control = swiperObj.rightSwiper;
		swiperObj.rightSwiper.controller.control = swiperObj.leftSwiper;

		swiperObj.swiperDeskInit = false;
	}

});