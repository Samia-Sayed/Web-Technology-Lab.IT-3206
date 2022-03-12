const navLinks = document.querySelectorAll('.nav-links li');
const navTgl = document.querySelector('.nav-tgl')
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
     

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = '';
            }else{
                link.style.animation = 'navLinkFade 0.5s ease forwards $(index / 7 + 0.3)s';
            }
            
        });
        burger.classList.toggle('tgl');
    });
}
navSlide();
navTgl.addEventListener('click', () => {
    nav.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('nav-open');
    })
})