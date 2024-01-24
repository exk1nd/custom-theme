import lottie from "lottie-web";

document.addEventListener("DOMContentLoaded", () => {
	initFormLoader();
});

function initFormLoader() {
	let loaders = document.querySelectorAll(".loader-container");
	if (!loaders.length) return;
	loaders.forEach(el => {
		lottie.loadAnimation({
			container: el,
			renderer: "svg",
			loop: true,
			autoplay: true,
			path: wp_helper.home_path + "/src/loader.json"
		});
	});
}
