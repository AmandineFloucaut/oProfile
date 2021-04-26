// export Default : mot clé pour exporter la classe menu, la rendre utilisable

export default class Menu 
{
    showButton;
    closeButton;
    menu;

    // ex avec eventName en paramètres
    // constructor(buttonSelector, eventName = 'click') 
    constructor(buttonSelector) {

        //this.eventName = eventName;
        // console.log('appel du construteur');
        this.showButton = document.querySelector(buttonSelector);
        // console.log(this.closeButton);

        this.menu = document.querySelector('.main-menu');
        // console.log(this.menu);

        this.closeButton = document.querySelector('.close-button');
        // console.log(this.closeButton);

        /**
         1. (liste des paramètres)
         2. flèche de la fonction =>
        3. appel de la fonction a exécuter
         */
        //this.showButton.addEventListener(this.eventName, (event) => this.showMenu(event));
        this.showButton.addEventListener('click', (event) => this.showMenu(event));

        this.closeButton.addEventListener('click', (event) => this.closeMenu(event));

        // Note : avec cette syntaxe, js perd le this
        // this.button.addEventListener('click', this.showMenu);
    }

    showMenu(event) {

        // console.log(event);
        // console.log(this.closeButton);
        this.menu.style.display = 'block';
    }

    closeMenu(event) {
        // console.log(event);
        this.menu.style.display = 'none';
    }
}

console.log('%c' + 'Fichier Menu.js chargé', 'color: #0bf; font-size: 1rem; background-color:#fff');
