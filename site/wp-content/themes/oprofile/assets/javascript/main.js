console.log('%c' + 'Fichier main.js chargé', 'color: #0bf; font-size: 1rem; background-color:#fff');


// attention le import en js n'a pas "@"
import 'reset-css';

// installation de font awesome
import '@fortawesome/fontawesome-free/css/all.css';


// Import precompiled Bootstrap css
// import 'bootstrap/dist/css/bootstrap.css';

import '../scss/main.scss';

import Menu from './components/Menu';

import './components/carousel';

function initialize(){
    // console.log('initialisation initiliaze');
    const menu = new Menu('.top-bar__menu-btn');

    // exemple avec eventName en paramètre 
    //const menu2 = new Menu('.top-bar__logo', 'mouseover');
    // const menu2 = new Menu('.top-bar__logo');
    // console.log(menu2);
}


document.addEventListener('DOMContentLoaded', initialize);