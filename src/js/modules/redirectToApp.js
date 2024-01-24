document.addEventListener("DOMContentLoaded", () => {
	initRedirectToApp();
});

function initRedirectToApp() {
	let buttons = document.querySelectorAll(".btn-download-app");
	if (!buttons.length) return;

	buttons.forEach(el => {
		el.addEventListener("click", e => {
			e.preventDefault();
			const userAgent = navigator.userAgent.toLowerCase();
			if (/iphone|ipod/.test(userAgent)) {
				window.location.href = "https://apps.apple.com/us/app/payday-advance-borrow-money/id1542349316";
			} else if (/android/.test(userAgent)) {
				window.location.href = "https://play.google.com/store/apps/details?id=com.payday.advance.money.loan&hl=en_US&gl=US";
			} else {
				window.location.href = "https://apps.apple.com/us/app/payday-advance-borrow-money/id1542349316";
			}
		});
	});
}