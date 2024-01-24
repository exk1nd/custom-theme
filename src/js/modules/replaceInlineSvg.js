document.addEventListener("DOMContentLoaded", () => {
	initReplaceSvg();
});

function initReplaceSvg() {
	const images = document.querySelectorAll("img");

	if (images.length) {
		images.forEach(function (img) {
			img.onload = function () {
				if (img.classList.contains("svg-html")) {
					replaseInlineSvg(img);
				}
			};
		});

		window.addEventListener("load", (e) => {
			images.forEach(img => {
				if (img.complete && img.naturalHeight !== 0) {
					if (img.classList.contains("svg-html")) {
						replaseInlineSvg(img);
					}
				}
			});
		});
	}
}

function replaseInlineSvg(el) {
	const imgID = el.getAttribute("id");
	const imgClass = el.getAttribute("class");
	const imgURL = el.getAttribute("src");

	fetch(imgURL)
		.then(data => data.text())
		.then(response => {
			const parser = new DOMParser();
			const xmlDoc = parser.parseFromString(response, "text/html");
			let svg = xmlDoc.querySelector("svg");

			if (typeof imgID !== "undefined") {
				svg.setAttribute("id", imgID);
			}

			if (typeof imgClass !== "undefined") {
				svg.setAttribute("class", imgClass + " replaced-svg");
			}

			svg.removeAttribute("xmlns:a");

			if (el.parentNode) {
				el.parentNode.replaceChild(svg, el);
			}
		});
}