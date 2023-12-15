document.addEventListener("DOMContentLoaded", () => {
	initSidebarOffset();
});
window.addEventListener('resize', () => {
	initSidebarOffset();
});
function initSidebarOffset() {
	let sidebar = document.querySelector('aside.sidebar');
	if(!sidebar) return;

	let intro = document.querySelector('.intro-section');
	let bgHeight = 360;
	let offset = 25;
	sidebar.style.marginTop = Math.round(intro.getBoundingClientRect().height) * -1 + bgHeight + offset + 'px';
}
