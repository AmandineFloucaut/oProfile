const carousel = {

    // Déclaration de la variable qui enregistre le timer du slide auto du carrousel
    setTimerId: null,

    // Déclaration de la variable currentSlideCounter qui permettra de cibler les paragraphes dans le carrousel
    currentSlideCounter: 0,

    /**
     * Méthode d'initialisation
     */
    init: function() {
        // console.log('init caroussel');

        let buttons = document.querySelectorAll('.carousel__nav__button');
        // console.log(buttons);


       // écouter les evenments click de chacun
       for(let button of buttons){
           button.addEventListener('click',carousel.handleClick);
           button.addEventListener('click',carousel.handleActiveClassButton);
       }

       carousel.startAutoSlide();
    },


    /**
     * Méthode qui détecte l'évènement (le bouton cliqué dans le carrousel)
     * @param {*} event
     */
    handleClick: function(event){

        // console.log('fonction handleClick');

        // isTrusted détecte si un évènements est déclenché par une action de l'utilisateur ou par un script
        if(event.isTrusted){
            // Cette fonction annule l'action minutée de setInterval
            clearInterval(carousel.currentSlideCounter);
            console.log(carousel.currentSlideCounter);
            // console.log('if event trusted');

            // On redémarre le carrousel au bout de 10 secondes //! bug après le 1er redémarrage, accèlération du carrousel
            setTimeout(carousel.startAutoSlide, 9000);
        }


        let clickedButton = event.currentTarget;

        let slideNumber = clickedButton.dataset.slideNumber;

        carousel.displaySlide(slideNumber);

    },


    /**
     * Méthode permettant de modifier la couleur du bouton du carrousel lors du slide
     */
    handleActiveClassButton: function(event) {
        let currentButton = document.querySelector('.active');
        // console.log(currentButton);
        currentButton.classList.remove('active');

        //ciblage de  l'élémen cliqué
        let clickedButton = event.currentTarget;
        // console.log(clickedButton);
        clickedButton.classList.add('active');
    },


    /**
     * Méthode permettant de passer d'un article à l'autre dans le carrousel
     * @param {*} slideNumber
     */
    displaySlide: function(slideNumber){
        // console.log(slideNumber);

        const carousel = document.querySelector('.customer-quotes__container');
        //console.log(carousel);

        // offsetWidth récupère la largeur en pixels
        let slideWidth = carousel.offsetWidth;
        // console.log(slideWidth);

        carousel.scrollTo(slideWidth*slideNumber, 0);
    },


    startAutoSlide: function(){
        // console.log('fonction starAutoSlide');

        // Enregistrement du timer qui déclenchera la fonction goToNextSlide() toutes les 3 secondes -> utile pour arrếter le timer
        carousel.setTimerId = setInterval(carousel.goToNextSlide, 3000);
    },

    goToNextSlide: function(){
        // console.log('function goToNextSlide');

        // Incrémentation du compteur de slide à chaque déclenchement de la fonction, soit toutes les 2 secondes puisque celle ci est déclenché dans la fonction startAutoSlide
        carousel.currentSlideCounter++;
        // console.log(carousel.currentSlideCounter);

        // Si le compteur est supérieur à 2 (-> correspond au dernier paragraphe du carrousel ayant un data-number = "2), on le repasse à 0
        if(carousel.currentSlideCounter > 2){
            carousel.currentSlideCounter = 0;
        }

        // Enregistrement dans une variable de la classe à selectionner pour cibler les boutons selon leur currentSlideCounter
        let classButton = '.carousel__nav__button' + '[data-slide-number = "' + carousel.currentSlideCounter + '"]';
        // console.log(classButton);

        // Enregistrement du bouton ciblé
        let targetButton = document.querySelector(classButton);

        // Utilisation de la fonction native click() qui simule un faux clic sur le bouton ciblé
        targetButton.click();
    }

};

document.addEventListener('DOMContentLoaded', carousel.init);



