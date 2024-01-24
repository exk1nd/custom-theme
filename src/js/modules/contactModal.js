document.addEventListener("DOMContentLoaded", () => {
	initContactModal();
});

function initContactModal() {
	let forms = document.querySelectorAll(".wpcf7");
	if (!forms.length) return;

	forms.forEach(el => {
		let loader = document.createElement('div');
		loader.classList.add('loader-container');
		el.querySelector('form .btn-holder').append(loader);
		el.addEventListener("wpcf7mailsent", e => {
			let modalEl = document.querySelector("#contactFormModal");
			if (modalEl) {
				let modal = bootstrap.Modal.getOrCreateInstance(modalEl);
				modal.show();
				setTimeout(() => {
					modal.hide();
				}, 2000);
			}
		}, false);
		el.addEventListener("wpcf7mailfailed", e => {
			e.target.closest(".form-holder").classList.add("sending-failed");
		}, false);
	});
}

