$("document").ready(function () {

    var total = $("div#montant.col.s2").text();
    console.log(total);

        /*
                $("#montant").text();
                var total = $(this).text();
                console.log(total);
        */

/*        var totalStr = $(this).text.val();
        console.log(totalStr);*/

        /*        $(".montant").click(function () {
         var totalStr = $(this).val();
         console.log(totalStr);*/


/*        var total = $("#montant");
        console.log(total);*/

        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/ajax/total/' + $(total).val(),
            success: function fonctionDeRappel(data) {
                console.log(data);
            }
        });


    });

//$(document).ready(function() { alert($(".item span").text()); });