const leftButton = document.querySelector('.carou-left');
const rightButton = document.querySelector('.carou-right');
const Peoples = document.querySelectorAll('.card-noshow');
const numberPeoples = Peoples.length;
const toCarou = document.getElementById('to-carou');
const toMosaic = document.getElementById('to-mosaic');
const peoplecards = document.querySelectorAll('.people');

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

    for (let i=0; i < peoplecards.length; i++) {
        peoplecards[i].classList.remove('card');
        peoplecards[i].classList.add('card-noshow');
        }
        document.getElementById(`people${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`people${compteurId}`).classList.add('card');
    return compteurId
}

function mosaicInit() {
    leftButton.classList.add('card-noshow');
    rightButton.classList.add('card-noshow');

    for (let i=0; i < peoplecards.length; i++) {
        peoplecards[i].classList.remove('card-noshow');
        peoplecards[i].classList.add('card');
    }
}

function changeCard(direction, compteurId)
{
    let pastcompt = compteurId;
    console.log(compteurId);

    if (direction === 'left') {
        if (compteurId === 1) {
            compteurId = numberPeoples;
        } else {
            compteurId--;
        }
    } else if (direction === 'right') {
        if (compteurId === numberPeoples) {

            compteurId = 1;
        } else {
            compteurId++;
        }
    }
    document.getElementById(`people${compteurId}`).classList.add('card');
    document.getElementById(`people${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`people${pastcompt}`).classList.remove('card');
    document.getElementById(`people${pastcompt}`).classList.add('card-noshow');

    return compteurId;
}