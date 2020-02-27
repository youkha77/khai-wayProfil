window.onload = function() {

    TweenMax.set('body', {opacity:1});
    let tl1 = new TimelineMax();


    tl1
        .from('.sphere', 0.8, {delay: 0.1, scale: 0, top:"50%", left:"50%", opacity: 0, ease: Back.easeOut.config(1.7)})

        .to('.intro-container', 1, {top: 80, left: 82, right: 82, bottom: 80}, '+0.15')

        .to('.ligne1', 1, {width: "100%", ease:Circ.easeIn}, 1)

        .to('.ligne2', 1, {height: "100%", ease:Circ.easeIn}, 1)

        .to('.sphere', 1, {left: '75%', ease: Back.easeOut.config(2.7)})

        .from('.firstH1', 0.5, {opacity: 0, right:"200%"}, '-=1')

        .from('.secondH1', 0.7, {opacity:0, right:"200%"}, '-=1')

        .staggerFrom('.item', 0.3, {y: 50, opacity:0}, 0.3);
}