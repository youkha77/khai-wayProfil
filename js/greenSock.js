TweenMax.to('#arrow', 2, {
    
    delay: 2.7,
    opacity: 1,
    ease: Expo.easeInOut
})

TweenMax.to('#accueil h1', 2, {
    
    opacity: 1,
    ease: Expo.easeInOut
})

TweenMax.to('#accueil h2', 3, {
    
    opacity: 1,
    ease: Expo.easeInOut
})

TweenMax.to('#navigation', 1, {
    
    opacity: 1,
    ease: Expo.easeInOut
})

TweenMax.from('#navigation', 1.5, {
    delay: .2,
    y: -40,
    ease: Expo.easeIn
})

/* liens qui apparait les uns après les autres */

TweenMax.from('#navigation a:nth-child(1)', 2.5, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})

TweenMax.from('#navigation a:nth-child(2)', 3, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})

TweenMax.from('#navigation a:nth-child(3)', 3.5, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})

TweenMax.from('#navigation a:nth-child(4)', 4, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})

TweenMax.from('#navigation a:nth-child(5)', 4.5, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})
TweenMax.from('#navigation a:nth-child(6)', 5, {
    delay: 1.2,
    y: 20,
    opacity:0,
    ease: Expo.easeInOut
})

/* apparait apres */


