const AnimItems = document.querySelectorAll("[data-anim-item]");
window.addEventListener("load", windowLoad);

function windowLoad() {


	function animateElement(element) {
		element.classList.add("_appear");
	}

	// observer
	let options = {
		threshold: 0.3
	};
	let observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			const targetElement = entry.target;
			if (entry.isIntersecting) {
				animateElement(targetElement);
				observer.unobserve(targetElement);
			}
		});
	}, options);
	AnimItems.forEach(item => {
		observer.observe(item);
	});
}