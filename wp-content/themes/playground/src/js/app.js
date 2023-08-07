const elUI = {
	menuToggle: document.querySelectorAll('[data-ui="mainmenu-mobile__toggle"]')
}

const elSection = {
	menuMobile: document.querySelector('[data-section="mainmenu-mobile"]')
}

console.log(elUI)

elUI.menuToggle.forEach(function(item){

	item.addEventListener('click', function(){

		if(elSection.menuMobile.classList.contains('mainmenu-mobile--show')){
			document.querySelector('body').classList.remove('fixed', 'top-0')
			elSection.menuMobile.classList.remove('mainmenu-mobile--show')
		} else {
			elSection.menuMobile.classList.add('mainmenu-mobile--show')
			document.querySelector('body').classList.add('fixed', 'top-0')
		}

	})

})