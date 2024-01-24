document.addEventListener("DOMContentLoaded", () => {
	initUnifyCardsHeight();
});

function initUnifyCardsHeight() {
	let cards = document.querySelectorAll(".cards-section .card");
	if (!cards.length) return;

	checkHeight();
	window.addEventListener("resize", checkHeight);

	function checkHeight() {
		if (window.innerWidth < 992) {
			let arr = [];
			cards.forEach(el => {
				let img = el.querySelector('.img-holder');
				let imgMt = parseInt(window.getComputedStyle(img, null).getPropertyValue('margin-bottom'));
				let text = el.querySelector('.text-holder');
				let pt = parseInt(window.getComputedStyle(el, null).getPropertyValue('padding-top'));
				let pb = parseInt(window.getComputedStyle(el, null).getPropertyValue('padding-bottom'));
				let height = Math.round(img.getBoundingClientRect().height + imgMt + text.getBoundingClientRect().height + pt + pb);
				arr.push(height);
			});
			cards.forEach(el => {
				el.style.height = Math.max(...arr) + 'px';
			});
		} else {
			cards.forEach(el => {
				el.removeAttribute('style');
			});
		}
	}
}
