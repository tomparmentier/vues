
    // Sélectionne le bouton par son type (type="button")
    var button = document.querySelector('button');

    // Ajoute un écouteur d'événement au bouton
    button.addEventListener('click', function() {
        // Génère un nombre aléatoire entre 1 et 100 (ajuste selon tes besoins)
        var randomNumber = Math.floor(Math.random() * 100) + 1;

        // Sélectionne la balise <p> par son type
        var h4 = document.querySelector('h4');

        // Modifie le contenu de la balise <p> avec le nombre aléatoire généré
        h4.textContent = 'Mon nombre aléatoire est : ' + randomNumber;
    });
