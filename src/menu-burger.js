const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
burger.addEventListener('click', () => {
    if (menu.style.display === 'none'){
        menu.style.display = 'flex';
        console.log('if');
    }else{
        menu.style.display = 'none';
        console.log('else');
    }

    }
);

const arrowLeft = document.getElementsByClassName('arrow-left');
const arrowRight = document.getElementsByClassName('arrow-right');

