const btnChoix = document.querySelectorAll('.illustration div');
const form = document.querySelectorAll('form');
const pGauche = document.querySelector('.panneauGauche');
const form0 = form[0];
const form1 = form[1];
const form2 = form[2];
const btn0 = btnChoix[0];
const btn1 = btnChoix[1];
const btn2 = btnChoix[2];


btn0.addEventListener('click', () => {
    /*if (!form0.classList.contains('noneForm') || !form1.classList.remove('noneForm') || !form2.classList.remove('noneForm')) {
        pGauche.firstChild.style.display = 'none'
    }*/
    pGauche.style.display  = 'block';
    form0.classList.remove('noneForm');
    form1.classList.add('noneForm');
    form2.classList.add('noneForm');

    btn0.classList.add('active');
    btn1.classList.remove('active');
    btn2.classList.remove('active');
});

btn1.addEventListener('click', () => {
    pGauche.style.display  = 'block';
    form1.classList.remove('noneForm');
    form2.classList.add('noneForm');
    form0.classList.add('noneForm');

    btn1.classList.add('active');
    btn2.classList.remove('active');
    btn0.classList.remove('active');
});

btn2.addEventListener('click', () => {
    pGauche.style.display  = 'block';
    form2.classList.remove('noneForm');
    form1.classList.add('noneForm');
    form0.classList.add('noneForm');

    btn2.classList.add('active');
    btn1.classList.remove('active');
    btn0.classList.remove('active');
});