document.addEventListener("DOMContentLoaded", () => {
	initCustomHref();
});

function initCustomHref() {
	let links = document.querySelectorAll("[data-href]");
	if (!links.length) return;

	links.forEach(el => {
		el.addEventListener("click", e => {
			e.preventDefault();
			// console.log(el.dataset.href);
			window.location.href = el.dataset.href;
		});
	});
}
