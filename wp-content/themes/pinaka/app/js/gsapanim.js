$(document).ready(function(){

    const lenis = new Lenis({
    	duration: 1,
    	easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
    	direction: 'vertical', // vertical, horizontal
    	gestureDirection: 'vertical', // vertical, horizontal, both
    	smooth: true,
    	mouseMultiplier: 2,
    	smoothTouch: true,
    	touchMultiplier: 2,
    	infinite: false,
      })

      //get scroll value
      lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
    	// console.log({ scroll, limit, velocity, direction, progress })
      })

      function raf(time) {
    	lenis.raf(time);
    	// ScrollTrigger.update();
    	requestAnimationFrame(raf);
      }

      requestAnimationFrame(raf);
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.config({autoRefreshEvents: "DOMContentLoadeds,load"});
    ScrollTrigger.defaults({ scroller: document.body });
	

    gsap.to(".parallax-slide", {
        scrollTrigger: {
          scrub: true
        },
        x: (i, target) => ScrollTrigger.maxScroll(window) * target.dataset.speed,
        ease: "none"
      });

    //   const line = $(".section__line"),
    //   lineWrapper = $(".section__wrapper");
    //     gsap.set(line, {transformOrigin: "center top", xPercent: -50, x: 0})

    //     gsap.fromTo(line, {
    //         scaleY: 0,
    //         }, {
    //         scaleY: 1,
    //         ease: "none",
    //         scrollTrigger: {
    //             trigger: lineWrapper,
    //             start: 0,
    //             end: () => "+=" + lineWrapper[0].offsetHeight,
    //             markers: true,
    //             scrub: true,
    //         }
    //     });


});