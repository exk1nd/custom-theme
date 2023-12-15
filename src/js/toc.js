import smoothscroll from "smoothscroll-polyfill";
smoothscroll.polyfill();
document.addEventListener("DOMContentLoaded", () => {
	// initTocWidget();
	// initMobToc();
});

function initTocWidget() {
	let el = document.querySelector(".toc-widget__list");
	if (!el) return;
	let widget = document.querySelector("#toc");
	let bg = document.querySelector(".plashka");
	let anchors = el.querySelectorAll("a");
	let titles = [];

	anchors.forEach((link) => {
		let href = link.getAttribute("href");
		titles.push(href);
		link.addEventListener("click", (event) => {
			event.preventDefault();
			if (document.body.classList.contains("toc-list-visible")) {
				document.body.classList.remove("toc-list-visible");
				bg.classList.remove("active");
			}
			if (link.hash) {
				const target = document.querySelector(link.hash);
				let widgetHeight = document.querySelector("#toc").offsetHeight;
				let top = target.getBoundingClientRect().top + window.scrollY - 66;

				window.scrollTo({
					top: top,
					behavior: "smooth",
				});
			}
		});
	});

	window.addEventListener("scroll", initSpyOnScroll);

	function initSpyOnScroll() {
		titles.forEach((el) => {
			let section = document.querySelector(el);
			let EL_POS = document.querySelector(el).offsetTop;
			let scrollPosition = window.scrollY;
			if (scrollPosition + widget.clientHeight >= EL_POS) {
				let id = section.getAttribute("id");
				let subMenuItems = document.querySelectorAll("#toc li a");
				let active = document.querySelector("#toc .active");
				if (active) active.classList.remove("active");
				subMenuItems.forEach((el) => {
					if (el.getAttribute("href") === "#" + id) {
						el.parentElement.classList.add("active");
					}
				});
			}
		});
	}

	let mobBtn = document.querySelector("#toc .toc-widget__title-btn");
	if (mobBtn) {
		mobBtn.addEventListener("click", (e) => {
			e.preventDefault();
			document.body.classList.toggle("toc-list-visible");
			bg.classList.toggle("active");
		});
	}
}
