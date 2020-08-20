import "./navigation.js"
import "../scss/main-style.scss"
import lottie from "lottie-web"
// lottie.searchAnimations()

"use strict";

const clamp = (min, val, max) => Math.min(Math.max(val, min), max);

let instances = [];

document.querySelectorAll('[data-lottie]').forEach(el=>{
  
  let li = lottie.loadAnimation({
    container: el,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: el.dataset.animationPath // the path to the animation json
  });

  instances.push({
    'el': el, 
    'lottie': li
  })
  
})

const setPos = () => {  
  instances.map(i => {
    const s = i.el.getBoundingClientRect().top,
          b = i.el.getBoundingClientRect().height,
          d = window.innerHeight,
          p = clamp(0,(s-d)/(-d-b),1);
    
    i.lottie.goToAndStop(i.lottie.getDuration(false) * p * 10, true);
  })

  requestAnimationFrame(setPos)
}

setPos()


