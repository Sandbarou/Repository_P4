$("document").ready(function () {

    // $("div#resumetickets").hide();

    // array 0
    $("input#client_tickets_NaN_birthDate.datepicker").change(function appelAjax () {

/*        var montant = $("div#price").text();
        console.log(montant);*/

        var dateStr = $(this).val();
        console.log(dateStr); // 20171006

        var date = $("input#client_tickets_NaN_birthDate.datepicker");

        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
            // url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val() + '\/' + $(discount).val(),
            success: function fonctionDeRappel(data) {
                console.log(data);
                if (data) {
                    $("div#price").html(data);
                }

                var total = $("div#price").text();
                console.log(total);

            }

        });

    });

    // array 1
    $("input#client_tickets_1_birthDate.datepicker").change(function appelAjax () {

/*
        var montant = $("div#price").text();
        console.log(montant);
*/

        var dateStr = $(this).val();
        console.log(dateStr); // 20171006

        var date = $("input#client_tickets_1_birthDate.datepicker");


        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
            //url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val() + '\/' + montant,
            success: function fonctionDeRappel(data) {
                console.log(data);
                if (data) {
                    $("div#price").html(data);
                }

                var total = $("div#price").text();
                console.log(total);

            }


        });


    });












});