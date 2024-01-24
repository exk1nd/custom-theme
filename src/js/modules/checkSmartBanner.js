document.addEventListener("DOMContentLoaded", () => {
	checkSmartBanner();
});
window.addEventListener("resize", () => {
	checkSmartBanner();
});

function checkSmartBanner() {
	let banner = document.querySelector(".smart-banner-section");
	if (!banner) return;

	if (window.innerWidth < 768) {
		let storage = sessionStorage.getItem("smartBanner");
		if (!storage) {
			document.body.classList.add("smart-banner-active");
			if (banner) {
				banner.addEventListener("click", (e) => {
					if (e.target.classList.contains("close-banner-btn")) {
						e.preventDefault();
						document.body.classList.remove("smart-banner-active");
						sessionStorage.setItem('smartBanner', 'hidden');
					}
				});
			}
		}
	}
}
