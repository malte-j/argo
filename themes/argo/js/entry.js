import "./navigation.js"
import "../scss/main-style.scss"
import lottie from "lottie-web"
// lottie.searchAnimations()
document.querySelectorAll('[data-lottie]').forEach(el=>{
  
  lottie.loadAnimation({
    container: el,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: el.dataset.animationPath // the path to the animation json
  });
  
})

