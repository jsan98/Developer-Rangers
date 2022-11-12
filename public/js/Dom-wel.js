window.addEventListener('scroll', function() {

unoscroll();
doscroll();

});

//desplacar imagen desde el borde izquierdo
function unoscroll() 
{
    let elen = document.getElementById('ImagenAb');
    let posicion = elen.getBoundingClientRect().top;
    let tamañoPantalla = window.innerHeight / 2;

    if (posicion < tamañoPantalla) {
        elen.style.animation = 'Mover 1s ease-out';
        elen.style.visibility = 'visible';
    }
}

//desplacar imagen desde el borde derecho
function doscroll(){
    let elen1 = document.getElementById('ImgLogsc');
    let posicion1 = elen1.getBoundingClientRect().top;
    let tamañoPantalla = window.innerHeight / 2;


    if (posicion1 < tamañoPantalla) {
        elen1.style.animation = 'mover 1s ease-out';
        elen1.style.visibility = 'visible';
    }
}

//Evento load para desplasar imagenes desde la parte superior e inferior de la pantalla
window.addEventListener('load', function() {

let ancho = window.innerWidth;
let desplat1 = document.getElementById('Text1');
desplat1.style.visibility = 'visible';
desplat1.style.transition = '2s';

let desplat2 = document.getElementById('Img1');
desplat2.style.visibility = 'visible';
desplat2.style.transition = '2s';

if (ancho > 1466) {
    desplat1.style.transform = 'translateY(2.9em)';
    desplat2.style.transform = 'translateY(-6em)';
}
else if (ancho > 1020 && ancho <= 1466) {
    desplat1.style.transform = 'translateY(5em)';
    desplat2.style.transform = 'translateY(-9em)';
}
else if (ancho <= 1020 && ancho > 768) {
    desplat1.style.transform = 'translateY(8em)';
    desplat2.style.transform = 'translateY(-12em)';
}
else if (ancho <= 768) {
    desplat1.style.transform = 'translateY(9em)';
    desplat2.style.transform = 'translateY(-14em)'; 
    desplat1.style.fontSize = '9vw';
    desplat1.style.left = '23vw';
    desplat2.style.left = '10vw';
    desplat2.style.height = '25vw';
    desplat2.style.width = '80vw';
}



})


let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    effect: "cube",
    grabCursor: true,
    autoplay: {
      delay: 2700,
      disableOnInteraction: false,
    },
    cubeEffect: {
       
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      }


  });
  
  let typed = new Typed('.typed', {
    strings: ['Beneficios de utilizar Cow - bem','Lo mejor de la tecnología en un solo lugar'] ,
    typeSpeed: 55,
    loop: true,
    backSpeed: 72,
    showCursor: true,
    startDelay: 200,
});


window.onscroll = function() {
    let posicion = window.pageYOffset || document.documentElement.scrollTop;
    let img1 = document.getElementById('ImagenAb');
    img1.style.bottom = posicion * 0.1 + 'px';
};