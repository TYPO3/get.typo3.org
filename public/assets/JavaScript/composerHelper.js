document.addEventListener("DOMContentLoaded", function() {
	const form = document.getElementById('js-composer-helper-form');

	form.addEventListener('submit', function(e) {
		e.preventDefault();
		vanillaAjaxForm(form);
		return false;
	});

});

const vanillaAjaxForm = function(form) {
	const formData = new FormData(form);
	const action = form.getAttribute('action') || '';
	const xhr = new XMLHttpRequest();
	xhr.open('POST', action);
	xhr.send(formData);
	xhr.onreadystatechange = function() {
		const DONE = 4;
		const OK = 200;
		if(xhr.readyState === DONE) {
			if(xhr.status === OK) {
				const response = JSON.parse(xhr.responseText);
				let outputContainerWrapper = document.getElementsByClassName('js-composer-helper-console');
				let outputContainer = document.getElementsByClassName('js-composer-helper-packages');
				outputContainer[0].innerHTML = '';

				let showOutput = false;
				Object.keys(response.status).forEach(function(composerPackage) {
					if(response.status[composerPackage] === true) {
						showOutput = true;
						outputContainer[0].insertAdjacentText('beforeend', ' ' + composerPackage)
					}
				});

				outputContainerWrapper[0].classList.add('d-none');
				if(showOutput) {
					outputContainerWrapper[0].classList.remove('d-none');
				}
			} else {
				console.error('Composer Helper Error: ' + xhr.status + ' - ' + xhr.statusText);
			}
		}
	};
};

const checkboxChangeEvent = function() {
	const form = document.getElementById('js-composer-helper-form');
	const event = new Event('submit');
	form.dispatchEvent(event);
};
