
$(document).ready(function() {   
    
    $('select').material_select();

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 2, // Creates a dropdown of 15 years to control year,
        today: 'Aujourd\'hui',
        clear: '',
        /* close: 'Ok',*/
        closeOnSelect: true, // Close upon selecting a date,
        // Pass the months and weekdays as an array for each invocation.
        monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthsShort: [ 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Déc' ],
        weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
        weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
        weekdaysLetter: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        showMonthsShort: true,
        format: 'yyyy-mm-dd',//dd mmmm yyyy
        formatSubmit: 'yyyy-mm-dd',//yyyymmdd
        hiddenName: true,
        labelMonthNext:"Mois suivant",
        labelMonthPrev:"Mois précédent",
        labelMonthSelect:"Sélectionner un mois",
        labelYearSelect:"Sélectionner une année",
        firstDay: 1,
        min: true,
        max: +380,
        disable: [
            2, 7,
            new Date(2017,10,1),
            new Date(2017,10,11),
            new Date(2017,11,25),
            
            new Date(2018,0,1),
            new Date(2018,3,1),
            new Date(2018,3,2),
            new Date(2018,4,1),
            new Date(2018,4,8),
            new Date(2018,4,10),
            new Date(2018,4,20),
            new Date(2018,4,21),
            new Date(2018,6,14),
            new Date(2018,7,15),
            new Date(2018,10,1),
            new Date(2018,10,11),
            new Date(2018,11,25),
            
            new Date(2019,0,1),
            new Date(2018,3,21),
            new Date(2018,3,22),
            new Date(2019,4,1),
            new Date(2019,4,8),
            new Date(2019,4,30),
            new Date(2019,5,9),
            new Date(2019,5,10),
            new Date(2019,6,14),
            new Date(2019,7,15),
            new Date(2019,10,1),
            new Date(2019,10,11),
            new Date(2019,11,25)
        ]
    
    });


});