document.addEventListener("DOMContentLoaded", function() {
	const form = document.getElementById('js-composer-helper-form');

	form.addEventListener('submit', function(e) {
		e.preventDefault();
		vanillaAjaxForm(form);
		return false;
	});

	fixedScrollOutputContainer(form);
	toggleAll();
	copyCommandToClipboard();

});

/**
 * sets the container to fixed if it is about to scroll out of the viewport.
 * @param form
 */
const fixedScrollOutputContainer = function(form) {
	let ticking = false;
	const outputContainer = document.getElementsByClassName('js-composer-helper-console');
	const z = getContainerPosition(outputContainer[0]);

	window.addEventListener('scroll', function(e) {
		if(!ticking) {
			window.requestAnimationFrame(function() {
				if(this.scrollY !== 0 && this.scrollY >= z) {
					const pos = outputContainer[0].getBoundingClientRect();
					form.style.marginTop = pos.height + 'px';
					outputContainer[0].classList.add('fixedTop');
				} else {
					form.style.marginTop = '0';
					outputContainer[0].classList.remove('fixedTop');
				}
				ticking = false;
			});
			ticking = true;
		}
	});
};

const toggleAll = function() {
	const toggleAllButton = document.getElementsByClassName('js-composer-helper-toggle-all');
	const composerPackages = document.getElementsByClassName('js-composer-package-check');
	let checkedAll = false;

	toggleAllButton[0].addEventListener('click', function() {
		Array.from(composerPackages).forEach(composerPackage => {
			if(checkedAll === false) {
				composerPackage.checked = true;
				composerPackage.parentElement.classList.add('active');
			} else {
				composerPackage.checked = false;
				composerPackage.parentElement.classList.remove('active');
			}
		});
		checkedAll = !checkedAll;
		checkboxChangeEvent();
	});
};

const getContainerPosition = function(container) {
	container.classList.remove('d-none');
	const containerPosition = container.getBoundingClientRect();
	container.classList.add('d-none');
	return containerPosition.y + window.scrollY;
};

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
				let outputContainerWrapper = document.getElementsByClassName('js-composer-helper-console')[0];
				let outputContainer = document.getElementsByClassName('js-composer-helper-packages')[0];
				outputContainer.innerHTML = '';

				let showOutput = false;
				Object.keys(response.status).forEach(composerPackage => {
					if(response.status[composerPackage] === true) {
						showOutput = true;
						outputContainer.insertAdjacentText('beforeend', ' ' + composerPackage)
					}
				});

				outputContainerWrapper.classList.add('d-none');
				if(showOutput) {
					outputContainerWrapper.classList.remove('d-none');
				}
			} else {
				console.error('Composer Helper Error: ' + xhr.status + ' - ' + xhr.statusText);
			}
		}
	};
};

/**
 * This event is assigned via the onChange attribute since bootstraps data-toggle for checkbox buttons suppresses the change event
 */
const checkboxChangeEvent = function() {
	const form = document.getElementById('js-composer-helper-form');
	const event = new Event('submit');
	form.dispatchEvent(event);
};

const copyCommandToClipboard = function() {
	const copyToClipboardButton = document.getElementsByClassName('js-command-copy-clipboard')[0];
	copyToClipboardButton.addEventListener('click', function() {
		const selection = window.getSelection();
		const range = document.createRange();
		const command = document.getElementsByClassName('js-composer-command')[0];
		range.selectNodeContents(command);
		selection.removeAllRanges();
		selection.addRange(range);

		document.execCommand('copy');
		selection.removeAllRanges();

		const original = copyToClipboardButton.textContent;
		copyToClipboardButton.textContent = 'Copied!';

		setTimeout(() => {
			copyToClipboardButton.textContent = original;
		}, 1200);
	})
};
