let mapClone = document.querySelector('.map_clone');
let mapButton = document.querySelector('.map-button');

mapButton.onclick = function(){
    mapClone.classList.toggle('<?php require("components/map_rf.php");?>');
    karta.classList.toggle('<?php require("components/map_pfo.php");?>');
}


let el_1 = document.getElementById('map_ch');

function changeSingle(element) {
    element.innerHTML = 'Притве';
    }


let karta = document.querySelector('.karta');
let mapButton = document.querySelector('.map-button');

mapButton.onclick = function(){
    karta.classList.toggle('map_rf');
    karta.classList.toggle('map_pfo');
}


