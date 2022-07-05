window.addEventListener('load', init);

let apiUrl = 'http://localhost/CLE3MagazineNew/webservices/';
let section;
let arrayJDM = [];


function init() {
    section = document.getElementById('JDMCar');
    section.addEventListener('click', buttonClickHandler);

    getJDM();

    if (typeof window.localStorage === "undefined") {
        console.error('Local storage is not available in your browser');
        return;
    } else if (localStorage.getItem('id') !== null){
        arrayJDM = JSON.parse(localStorage.getItem('id'));
    }
}

function getJDM() {
    fetch(apiUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(Success)
        .catch(Error);
}

function Success(data){
    console.log(data);
    for (let JDM of data) {
        let div = document.createElement('div');
        div.classList.add('JDM');
        if (arrayJDM.includes(`${JDM.id}`)){
            div.classList.add("fav");
        }
        div.innerHTML = '<h1>' + JDM.model + '<h1>'
        section.appendChild(div);
        let image = document.createElement('img');
        image.src = JDM.image;
        div.appendChild(image);

        let $detail = document.createElement('button');
        $detail.classList.add('info');
        $detail.addEventListener('click', addItem);
        $detail.id = JDM.id;
        $detail.innerHTML = 'Information'
        div.appendChild($detail);

        let $favorite = document.createElement('button');
        $favorite.classList.add('Favourite');
        $favorite.id = JDM.id;
        $favorite.dataset.id = JDM.id;
        $favorite.dataset.fav = 'Favourite';
        $favorite.innerHTML = 'Favourite';
        if (arrayJDM.includes(`${JDM.id}`)){
            $favorite.innerHTML = "Your Favourite";
        }
        div.appendChild($favorite);
    }
}

function Error(data) {
    console.log(data);
}

function addItem (e) {
    let all = document.getElementById('JDMDetails');

    let temporary = document.getElementById('box');

    if (temporary) {
        all.removeChild(temporary);
    }

    let section = document.createElement('section');
    section.id = 'box';
    all.appendChild(section);

    let clickedItem = e.target.id;
    let url = apiUrl + '?id=' + clickedItem;

    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(Success2)
        .catch(Error);
}

function Success2(data) {
    let section = document.getElementById('box');
    section.innerHTML = '<h1>Year</h1>' + data.Year + '<h1>Specs</h1>' + data.Specs;
}

function buttonClickHandler(e) {
    let target = e.target;
    if (e.target.nodeName !== 'BUTTON') {
        return;
    }
    if (target.dataset.fav === 'Favourite') {
        favoriteHandler(e);
    }
}

function favoriteHandler(e) {
    let target = e.target;
    let id = target.dataset.id;

    if (target.parentElement.classList.contains('fav')) {
        target.parentElement.classList.remove('fav');
        let itemPosition = arrayJDM.indexOf(`${id}`);
        arrayJDM.splice(itemPosition, 1);
        localStorage.setItem('id', JSON.stringify(arrayJDM));
        target.innerHTML = "Favourite";
    } else {
        target.parentElement.classList.add('fav');
        arrayJDM.push(id);
        localStorage.setItem('id', JSON.stringify(arrayJDM));
        target.innerHTML = "Your Favourite";
    }
}
