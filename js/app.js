let nav = document.getElementById('navigation');
let liens = document.getElementsByClassName('liensNav');
let icon = document.getElementById('icon');

window.onresize = colorHeader;
window.onload = colorHeader;


function colorHeader(){

    let myWidth = window.innerWidth;

    window.onscroll = function () {

        if(myWidth > 768) {

        if(document.documentElement.scrollTop > 980) {

            nav.style.background = "#373737";
            liens[0].style.color = "white";
            liens[1].style.color = "white";
            liens[2].style.color = "white";
            liens[3].style.color = "white";
            liens[4].style.color = "white";
            
        }else{
            nav.style.background = "#F0EAd6";
            liens[0].style.color = "#373737";
            liens[1].style.color = "#373737";
            liens[2].style.color = "#373737";
            liens[3].style.color = "#373737";
            liens[4].style.color = "#373737";
        }

    }else{
        nav.style.background = "#F0EAd6";
        liens[0].style.color = "#373737";
        liens[1].style.color = "#373737";
        liens[2].style.color = "#373737";
        liens[3].style.color = "#373737";
        liens[4].style.color = "#373737";
    }
    }
}

function toggleNav(){
    if(nav.className === "") {
        nav.className += "responsive";
    }else{
        nav.className = "";
    }
}

$('html').click(function (){

    if(nav.className += "responsive"){
        nav.className = "";
    }
})

$('#icon').click(function (event){
    event.stopPropagation();
});

/* les scrolls */

$('#arrow').click(function (){
    $('html,body').animate({
        scrollTop: $('#section-about').offset().top - 50
    },
    'slow')

})

$('.liensNav:nth-child(2)').click(function (){
    $('html,body').animate({
        scrollTop: $('#accueil').offset().top - 50
    },
    'slow')

})

$('.liensNav:nth-child(3)').click(function (){
    $('html,body').animate({
        scrollTop: $('#section-about').offset().top - 50
    },
    'slow')

})

$('.liensNav:nth-child(4)').click(function (){
    $('html,body').animate({
        scrollTop: $('#projets').offset().top - 50
    },
    'slow')

})

$('.liensNav:nth-child(5)').click(function (){
    $('html,body').animate({
        scrollTop: $('#capable').offset().top - 50
    },
    'slow')

})

$('.liensNav:nth-child(6)').click(function (){
    $('html,body').animate({
        scrollTop: $('#contact').offset().top - 50
    },
    'slow')

})

const controller = new ScrollMagic.Controller();

$('.projet').each(function(){

    let overlay = $(this).find('.overlay');
    let projetInfo = $(this).find('.projet-info');
    let smallTitle = $(this).find('.small-title');
    let projetLink = $(this).find('.projet-link');
    let title = $(this).find('h4');

    let TL = new TimelineMax();

    // to, fromto, from

    TL
    .fromTo(overlay, 2, {skewX: 30, scale: 1.5}, {skewX: 0, xPercent:100, transformOrigin: "0% 100%", ease: Power4.easeOut})
    .from(projetInfo, 1, {scaleY: 0, transformOrigin: "bottom left"}, "-=1.5")
    .from(smallTitle, 0.3, {autoAlpha: 0, y: 30, ease: Power4.easeOut}, "-=0.8")
    .from(projetLink, 0.3, {autoAlpha: 0, y: 30, ease: Power4.easeOut}, "-=0.8")
    .from(title, 0.3, {autoAlpha: 0, y: 30, ease: Power4.easeOut}, "-=0.8");

    let scene = new ScrollMagic.Scene({
        triggerElement: this
    })
    
    .setTween(TL)
    .addTo(controller);

})


function MakeCenter(id) {
	if (id == 'Center2') {
		document.getElementById("Center2").id = "Center";
		console.log("executed");
	}
	else if (id != 'Center') {
			if (id == 'Left') {
			var other = 'Right';
		} else {
			var other = 'Left';
		}
		document.getElementById('Center').id = "CenterM";
		document.getElementById(id).id = "idM";
		document.getElementById(other).id = "otherM"
		document.getElementById("idM").id = "Center2";
		document.getElementById('CenterM').id = other;
		document.getElementById('otherM').id = id;
		setTimeout(function() {MakeCenter('Center2')}, 500);
		console.log("Called");
	}
}