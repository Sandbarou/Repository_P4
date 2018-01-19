$("document").ready(function () {

/*
    $("#montant").text();
    var total = $(this).text();
    console.log(total);
*/

    $("input#oc_louvrebundle_client_tickets_NaN_birthDate.datepicker.picker__input").change(function appelAjax () {
        var dateStr = $(this).val();
        console.log(dateStr); // 20171006

        var date = $("input#oc_louvrebundle_client_tickets_NaN_birthDate.datepicker.picker__input");
        //var date = $(".datepicker.picker__input");


        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
            //cache: false,
            success: function fonctionDeRappel(data) {
                console.log(data);
                if (data) {
                    $("div#montant.col.s2").html(data);

                    var total = $("div#montant.col.s2").text();
                    console.log(total);
                    $.ajax({
                        method: "POST",
                        dataType:'json',
                        url: 'http://localhost/newP4/web/app_dev.php/ajax/total/' + $(total).val(),
                        success: function fonctionDeRappel(total) {
                            console.log(total);
                        }
                    });
                }
            }
        });

    });

/*    var total = $("div#montant.col.s2").text();
    console.log(total);

    $.ajax({
        method: "POST",
        url: 'http://localhost/newP4/web/app_dev.php/ajax/total/' + $(total).val(),
        success: function fonctionDeRappel(data) {
            console.log(data);
        }
    });*/


    /*    $("input#oc_louvrebundle_client_tickets_NaN_birthDate.datepicker.picker__input").change(function appelAjax () {
            var dateStr = $(this).val();
            console.log(dateStr); // 20171006

                var date = $("input#oc_louvrebundle_client_tickets_NaN_birthDate.datepicker.picker__input");
                //var date = $(".datepicker.picker__input");


                $.ajax({
                    method: "POST",
                    url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
                    //cache: false,
                    success: function fonctionDeRappel(data) {
                        if (data) {
                            $("div#montant.col.s2").html(data);
                        }
                        console.log(data);
                    }
                }).done(function fonctionDeRappel(data) {
                    console.log(data);
                });

        });*/

    $('input#oc_louvrebundle_client_tickets_1_birthDate.datepicker.picker__input').change(function appelAjax () {
        var dateStr = $(this).val();
        console.log(dateStr); // 20171006


            var date = $('input#oc_louvrebundle_client_tickets_1_birthDate.datepicker.picker__input');
            //var date = $(".datepicker.picker__input");


            $.ajax({
                method: "POST",
                url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
                //cache: false,
                success: function fonctionDeRappel(data) {
                    /*                    if (data === 10) {
                     $(".totaleuro").html(data);
                     }
                     if (data === 20) {
                     $(".totaleuro").html(data);
                     }
                     if (data === 30) {
                     $(".totaleuro").html(data);
                     }
                     if (data === 40) {
                     $(".totaleuro").html(data);
                     }*/
                    if (data) {
                        $(".montant").html(data);
                    }
                    console.log(data);
                }
            });

        var total = $("div#montant.col.s2").text();
        console.log(total);

        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/ajax/total/' + $(total).val(),
            success: function fonctionDeRappel(data) {
                console.log(data);
            }
        });

    });

    $('input#oc_louvrebundle_client_tickets_2_birthDate.datepicker.picker__input').change(function appelAjax () {
        var dateStr = $(this).val();
        console.log(dateStr); // 20171006


            var date = $("input#oc_louvrebundle_client_tickets_2_birthDate.datepicker.picker__input");
            //var date = $(".datepicker.picker__input");

            $.ajax({
                method: "POST",
                url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
                //cache: false,
                success: function fonctionDeRappel(data) {
                    if (data) {
                        $(".montant").html(data);
                    }
                    console.log(data);
                }
            }).done(function fonctionDeRappel(data) {
                console.log(data);
            });

    });

    $('input#oc_louvrebundle_client_tickets_3_birthDate.datepicker.picker__input').change(function appelAjax () {
        var dateStr = $(this).val();
        console.log(dateStr); // 20171006


            var date = $("input#oc_louvrebundle_client_tickets_3_birthDate.datepicker.picker__input");
            //var date = $(".datepicker.picker__input");


            $.ajax({
                method: "POST",
                url: 'http://localhost/newP4/web/app_dev.php/ajax/price/' + $(date).val(),
                //cache: false,
                success: function fonctionDeRappel(data) {
                    if (data) {
                        $(".montant").html(data);
                    }
                    console.log(data);
                }
            }).done(function fonctionDeRappel(data) {
                console.log(data);
            });

        });


});
//var test = $(".datepicker.picker__input");
//console.log(test);

//var testNaN = $("input#oc_louvrebundle_client_tickets_NaN_birthDate.datepicker.picker__input");
//console.log(testNaN);

//input#oc_louvrebundle_client_tickets_1_birthDate.datepicker.picker__input


