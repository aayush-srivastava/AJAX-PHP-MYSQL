burger = document.querySelector('.burger');
navlist = document.querySelector('.nav-list');
rightNav = document.querySelector('.rightNav');
navbar = document.querySelector('.navbar')

burger.addEventListener('click', () => {
    navlist.classList.toggle('v-class');
    rightNav.classList.toggle('v-class');
    navbar.classList.toggle('h-nav');
})