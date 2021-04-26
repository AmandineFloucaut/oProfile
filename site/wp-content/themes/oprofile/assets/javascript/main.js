console.log('%c' + 'Fichier main.js chargé', 'color: #0bf; font-size: 1rem; background-color:#fff');


// attention le import en js n'a pas "@"
import 'reset-css';

// installation de font awesome
import '@fortawesome/fontawesome-free/css/all.css';

import '../scss/main.scss';

import Menu from './components/Menu';

import './components/carousel';

function initialize(){

    const menu = new Menu('.top-bar__menu-btn');
}


document.addEventListener('DOMContentLoaded', initialize);