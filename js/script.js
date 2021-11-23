	// Hamburger Menu
	var hamburgerButton = document.getElementById('burger-menu-button');

	hamburgerButton.addEventListener('click', function () {
		document.body.classList.toggle('hamburger-menu-active');
	});

	var anchors = document.querySelectorAll('a[href^="#"]');
	for (let i = 0; i < anchors.length; i++) {
		anchors[i].addEventListener('click', function () {
			document.body.classList.remove('hamburger-menu-active');
		});
	}