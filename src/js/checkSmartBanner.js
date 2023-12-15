document.addEventListener("DOMContentLoaded", () => {
	checkSmartBanner();
});

function checkSmartBanner() {
	let holder = document.querySelector("#smart-banner-holder");

	if (AF) {
		document.body.classList.add("smart-banner-active");
	}
	if (holder) {
		holder.addEventListener("click", () => {
			if (document.body.classList.contains("smart-banner-active")) {
				document.body.classList.remove("smart-banner-active");
			}
		});
	}
}
