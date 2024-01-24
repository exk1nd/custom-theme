document.addEventListener("DOMContentLoaded", () => {
	initStarsRating();
});

function initStarsRating() {
	let rating = document.querySelectorAll(".rating-value");
	if (!rating.length) return;

	rating.forEach(el => {
		let ratingLength = 5;
		let value = el.innerText;
		// if (Math.floor(value) === 5) return;

		let starsRating = el.parentElement.querySelector(".stars-rating");
		if (starsRating) {
			let stars = starsRating.querySelectorAll(".star");
			let diff = ratingLength - Math.floor(value);
			stars.forEach((star, i) => {
				if (diff > 0) {
					if (i >= Math.round(value)) {
						star.classList.add("empty");
					}
				}
				if ((value - Math.floor(value)) > 0) {
					if (i === Math.floor(value)) {
						star.classList.add("half");
					}
				}
			});
		}
	});
}
