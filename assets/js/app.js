var t1 = gsap.timeline({ paused: true });

var menuToggle = document.getElementById("menuToggle");
var menuBar = gsap.timeline();

menuBar.to('.bar-1', 0.5, {
    attr:{d: "M8,2 L2,8"},
    x:1,
    ease: Power2.easeInOut
}, 'start');

menuBar.to('.bar-2', 0.5, {
    autoAlpha: 0
}, 'start');

menuBar.to('.bar-3', 0.5, {
    attr:{d: "M8,8 L2,2"},
    x:1,
    ease: Power2.easeInOut
}, 'start');

menuToggle.addEventListener('click', function() {
    menuBar.reversed(!menuBar.reversed());
    t1.reversed(!t1.reversed());
});

menuBar.reverse();
t1.reverse();

t1.to('.fullpage-menu', {
    duration: 0,
    display: "block",
    ease: 'Expo.easeInOut',
});

t1.from('.menu-bg span', {
    duration: 1,
    x: "100%",
    stagger: 0.1,
    ease: 'Expo.easeInOut'
})

t1.from('#menu-main li a', {
    duration: 1,
    y: "100%",
    stagger: 0.1,
    ease: 'Expo.easeInOut'
}, "-=0.5")

t1.from('.social-links li', {
    duration: 1,
    y: "-100%",
    opacity: 0,
    stagger: 0.1,
    ease: 'Expo.easeInOut'
}, "-=0.5")

window.onload = () => {
    if (window.scrollY > 200) {
        document.getElementById("headerRow").style.background = "linear-gradient(90deg, rgba(223,73,196,1) 0%, rgba(57,30,147,1) 100%)";
    } else {
        document.getElementById("headerRow").style.background = "transparent";
    }
}

window.onscroll = () => {
    if (window.scrollY > 200) {
        document.getElementById("headerRow").style.background = "linear-gradient(90deg, rgba(223,73,196,1) 0%, rgba(57,30,147,1) 100%)";
    } else {
        document.getElementById("headerRow").style.background = "transparent";
    }
};
