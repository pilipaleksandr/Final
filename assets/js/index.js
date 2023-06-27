let burgerMenu = document.querySelector('.burger-menu'),
    close = document.querySelector('#close'),
    headerBurger = document.querySelector('.header__burger');

headerBurger.addEventListener('click', () => {
    burgerMenu.style.display = 'block';
});

close.addEventListener('click', () => {
    burgerMenu.style.display = 'none';
});



let cardBtn = document.querySelectorAll('.card button'),
    infoModal = document.querySelector('.info-modal'),
    closeInfo = document.querySelector('.close-info'); 

cardBtn.forEach(item => {
    item.addEventListener('click', () => {
        infoModal.style.display = 'flex';
    });
});


closeInfo.addEventListener('click', () => {
    infoModal.style.display = 'none';
});

