const btnToggle = document.querySelector('.profil .bx');
const nav = document.querySelector('.profil-nav');
const body = document;

btnToggle.addEventListener('click', () => {
    nav.classList.toggle('none');
    btnToggle.classList.toggle('active');
});

