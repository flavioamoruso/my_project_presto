import './bootstrap';
import 'bootstrap';

let navbar=document.querySelector('#navbar');

window.addEventListener('scroll',()=>{
    let scrolled=window.scrollY
    if(scrolled>100){
        navbar.classList.add('navbarScroll')
    }else{
        navbar.classList.remove('navbarScroll')
    }
})

