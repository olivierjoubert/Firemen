const leftButton = document.querySelector('.carou-left');
const rightButton = document.querySelector('.carou-right');
const FireFighters = document.querySelectorAll('.card-noshow');
const numberFireFighters = FireFighters.length;
const toCarou = document.getElementById('to-carou');
const toMosaic = document.getElementById('to-mosaic');
const firecards = document.querySelectorAll('.firefighter');

compteurId = carrousselInit();


toCarou.addEventListener('click', function(event){
    compteurId = carrousselInit();
})

toMosaic.addEventListener('click', function(event){
    mosaicInit();
})

leftButton.addEventListener('click', function(event){
    compteurId = changeCard('left', compteurId);
})

rightButton.addEventListener('click', function(event){
    compteurId = changeCard('right', compteurId);
})




// Subfunctions
function carrousselInit() {
    leftButton.classList.remove('card-noshow');
    rightButton.classList.remove('card-noshow');
    let compteurId = 1;

    for (let i=0; i < firecards.length; i++) {
        firecards[i].classList.remove('card');
        firecards[i].classList.add('card-noshow');
    }
    document.getElementById(`firefighter${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`firefighter${compteurId}`).classList.add('card');
    return compteurId
}

function mosaicInit() {
    leftButton.classList.add('card-noshow');
    rightButton.classList.add('card-noshow');

    for (let i=0; i < firecards.length; i++) {
        firecards[i].classList.remove('card-noshow');
        firecards[i].classList.add('card');
    }
}

function changeCard(direction, compteurId)
{
    let pastcompt = compteurId;
    console.log(compteurId);

    if (direction === 'left') {
        if (compteurId === 1) {
            compteurId = numberFireFighters;
        } else {
            compteurId--;
        }
    } else if (direction === 'right') {
        if (compteurId === numberFireFighters) {

            compteurId = 1;
        } else {
            compteurId++;
        }
    }
    document.getElementById(`firefighter${compteurId}`).classList.add('card');
    document.getElementById(`firefighter${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`firefighter${pastcompt}`).classList.remove('card');
    document.getElementById(`firefighter${pastcompt}`).classList.add('card-noshow');

    return compteurId;
}