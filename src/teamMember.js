//TeamMembers

const leftBut = document.querySelector('.arrow-left');
const rightBut = document.querySelector('.arrow-right');
const teamMembers = document.querySelectorAll('.card-noshow');
const numberTeamMembers = teamMembers.length;
/*const toCarou = document.getElementById('to-carou');
const toMosaic = document.getElementById('to-mosaic');*/
const memberCards = document.querySelectorAll('.membeR');

compteurId = carrousselInit();


/*toCarou.addEventListener('click', function(event){
    compteurId = carrousselInit();
})

toMosaic.addEventListener('click', function(event){
    mosaicInit();
})*/

leftBut.addEventListener('click', function(event){
    compteurId = changeCard('left', compteurId);
})

rightBut.addEventListener('click', function(event){
    compteurId = changeCard('right', compteurId);
})




// Subfunctions
function carrousselInit() {
    leftBut.classList.remove('card-noshow');
    rightBut.classList.remove('card-noshow');
    let compteurId = 1;

    for (let i=0; i < memberCards.length; i++) {
        memberCards[i].classList.remove('card-Container');
        memberCards[i].classList.add('card-noshow');
    }
    document.getElementById(`membeR${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`membeR${compteurId}`).classList.add('card-Container');
    return compteurId
}

/*function mosaicInit() {
    leftBut.classList.add('card-noshow');
    rightBut.classList.add('card-noshow');

    for (let i=0; i < memberCards.length; i++) {
        memberCards[i].classList.remove('card-noshow');
        memberCards[i].classList.add('card');
    }
}*/

function changeCard(direction, compteurId)
{
    let pastcompt = compteurId;

    if (direction === 'left') {
        if (compteurId === 1) {
            compteurId = numberTeamMembers;
        } else {
            compteurId--;
        }
    } else if (direction === 'right') {
        if (compteurId === numberTeamMembers) {

            compteurId = 1;
        } else {
            compteurId++;
        }
    }
    document.getElementById(`membeR${compteurId}`).classList.add('card-Container');
    document.getElementById(`membeR${compteurId}`).classList.remove('card-noshow');
    document.getElementById(`membeR${pastcompt}`).classList.remove('card-Container');
    document.getElementById(`membeR${pastcompt}`).classList.add('card-noshow');

    return compteurId;
}