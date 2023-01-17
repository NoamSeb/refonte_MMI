// const countdownManager = {
//     // Configuration
//     targetTime: new Date("2023-02-04 08:00:00"), // Date cible du compte à rebours (00:00:00)
//     displayElement: {
//         // Elements HTML où sont affichés les informations
//         month: null,
//         day: null,
//         hour: null,
//         min: null,
//         sec: null,
//     },

//     // Initialisation du compte à rebours (à appeler 1 fois au chargement de la page)
//     init: function() {
//         // Récupération des références vers les éléments pour l'affichage
//         // La référence n'est récupérée qu'une seule fois à l'initialisation pour optimiser les performances
//         this.displayElement.month = document.querySelector("#countdown_month");
//         this.displayElement.day = document.querySelector("#countdown_day");
//         this.displayElement.hour = document.querySelector("#countdown_hour");
//         this.displayElement.min = document.querySelector("#countdown_min");
//         this.displayElement.sec = document.querySelector("#countdown_sec");

//         // Lancement du compte à rebours
//         this.tick(); // Premier tick tout de suite
//         setInterval(() => this.tick(), 1000); // Ticks suivant, répété toutes les secondes (1000 ms)
//     },

//     // Met à jour le compte à rebours (tic d'horloge)
//     tick: function() {
//         // Instant présent
//         const timeNow = new Date();

//         // On s'assure que le temps restant ne soit jamais négatif (ce qui est le cas dans le futur de targetTime)
//         if (timeNow > this.targetTime) {
//             timeNow = this.targetTime;
//         }

//         // Calcul du temps restant
//         const diff = this.dateDiff(timeNow, this.targetTime);
//         this.displayElement.month.textContent = diff.month;
//         this.displayElement.day.textContent = diff.day;
//         this.displayElement.hour.textContent = diff.hour;
//         this.displayElement.min.textContent = diff.min;
//         this.displayElement.sec.textContent = diff.sec;
//     },

//     // Calcul la différence entre 2 dates, en jour/heure/minute/seconde
//     dateDiff: function(date1, date2) {
//         const diff = { month: 0, day: 0, hour: 0, min: 0, sec: 0 };
//         let tmp = date2 - date1;

//         tmp = Math.floor(tmp / 1000); // Nombre de secondes entre les 2 dates
//         diff.sec = tmp % 60; // Extraction du nombre de secondes
//         tmp = Math.floor((tmp - diff.sec) / 60); // Nombre de minutes (partie entière)
//         diff.min = tmp % 60; // Extraction du nombre de minutes
//         tmp = Math.floor((tmp - diff.min) / 60); // Nombre d'heures (entières)
//         diff.hour = tmp % 24; // Extraction du nombre d'heures
//         tmp = Math.floor((tmp - diff.hour) / 24); // Nombre de jours restants
//         diff.day = tmp % 30;
//         tmp = Math.floor((tmp - diff.day) / 30); // Nombre de mois restants
//         diff.month = tmp;

//         return diff;
//     }
// }




// ---------------------------------------------------------------------------------------------





// Set the date we're counting down to
let countDownDate = new Date("Feb 4, 2023 08:00:00").getTime();

// Update the count down every 1 second
let x = setInterval(function() {

    // Get today's date and time
    let now = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("header--countDown").innerHTML = days + '<span class="black-light"> Jours </span>' + hours + '<span class="black-light"> : </span>' +
        minutes + '<span class="black-light"> min </span>' + seconds + '<span class="black-light"> sec </span>';

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("header--countDown").innerHTML = "EXPIRED";
    }
}, 1000);