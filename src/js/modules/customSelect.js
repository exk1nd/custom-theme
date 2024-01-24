import NiceSelect from "nice-select2/dist/js/nice-select2";

document.addEventListener("DOMContentLoaded", () => {
	initCustomSelect();
});

function initCustomSelect() {
	let select = document.querySelectorAll("select");
	if (!select.length) return;

	select.forEach(el => {
		let href = window.location.href;
		let num = href.replace(/\D/g, "");
		if (num) {
			let options = el.querySelectorAll("option");
			options.forEach(option => {
				if (!isNaN(options[0].value)) {
					if (+num < +options[0].value) {
						el.value = options[0].value;
					}
				} else {
					if (+num < +options[1].value) {
						el.value = options[1].value;
					}
				}

				if (num.length > 3 && num !== "1500") {
					el.value = Math.round(+num / 1000) * 1000;
				} else if (num.length === 2) {
					el.value = Math.round(+num / 100) * 100;
				} else if (num.length === 1) {
					el.value = options[0].value;
				} else {
					el.value = num;
				}

				if (+num > +options[options.length - 1].value) {
					el.value = options[options.length - 1].value;
				}
			});
		}
		new NiceSelect(el, {placeholder: "select"});
	});
}
