import scrollHelper from './scrollHelper';
import anime from 'animejs/lib/anime.es.js'

let started = false

function fadeIn(){
   anime({
      targets: '#service_areas_svg .service_town',
      opacity: 1,
      easing: 'easeInOutSine',
      duration: 40,
      delay: function(el, i) { return i * 20 },
            direction: 'linear',
            loop: false
   })
   anime({
      targets: '#service_areas_svg .service_text tspan',
      opacity: 1,
      easing: 'easeInOutSine',
      duration: 50,
      delay: function(el, i) { return i * 25 },
            direction: 'linear',
            loop: false
   })
}

function initServiceAreaAnimation() {
   let service_map = document.querySelector('#service_areas_svg')
   if( scrollHelper.isInViewport(service_map) && !started ){
      started = true
      fadeIn()
   }    
   setTimeout(function(){
      document.addEventListener('scroll', () => {
         if( scrollHelper.isInViewport(service_map) && !started ){
            started = true
            fadeIn()
         }    
      })
   }, 500)
}

window.addEventListener('load', function () {
    initServiceAreaAnimation()
}, false);


