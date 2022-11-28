$(function(){
	baguetteBox.run('.gallery');
});

$(document).ready(function() {
    const element = $(".header_box");
    const height_el = element.offset().top;
     
    $(window).scroll(function() {
        if($(window).scrollTop() > height_el) {
            element.addClass("fixed");
        } else {
            element.removeClass("fixed");
        }
    });
});

$(".phone_mask").mask("+7(999)999-99-99");

window.addEventListener('scroll', () => {
	let scrollDistance = window.scrollY+500;

	if (window.innerWidth > 768) {
		document.querySelectorAll('.section_menu').forEach((el, i) => {
			if (el.offsetTop - document.querySelector('.header_menu').clientHeight <= scrollDistance) {
				document.querySelectorAll('.header_menu a').forEach((el) => {
					if (el.classList.contains('nav-link','active')) {
						el.classList.remove('nav-link','active');
					}
				});

				document.querySelectorAll('.header_menu li')[i].querySelector('a').classList.add('nav-link','active');
			}
		});
	}
});

document.addEventListener('DOMContentLoaded', function () {
const slider = new ItcSimpleSlider('.itcss', {
	loop: true,
	autoplay: true,
	swipe: true
	});
});

let url = document.location.pathname
let servicesLink = /services-/
let trainersLink = /trainers/
if (servicesLink.test(url)) {
	document.querySelector('#menu-item-166 a').classList.add('nav-link','nav-link','active')
} 
if (trainersLink.test(url)) {
	document.querySelector('#menu-item-169 a').classList.add('nav-link','nav-link','active')
} 

const popup = document.querySelector('#pop-up');

function popYes() {
  sessionStorage.setItem('popup', 'none');
  location.reload();
}

if(sessionStorage.getItem('popup') || !window.sessionStorage) {
  popup.parentNode.removeChild(popup);
}else{
  if(window.stop !== undefined) {
    window.stop();
  } 
}


