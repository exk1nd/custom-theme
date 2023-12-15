document.addEventListener("DOMContentLoaded", () => {
	initTooltip();
});
function initTooltip() {
	let tooltipTriggerList = [].slice.call(document.querySelectorAll("[data-bs-toggle=\"tooltip\"]"));
	let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});
}
