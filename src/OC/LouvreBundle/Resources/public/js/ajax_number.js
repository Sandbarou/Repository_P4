
$("document").ready(function () {

    $("i.col.s5.m5.l4.waves-effect.waves-light.btn.waves-input-wrapper").hide();

    $("#visit_date").change(function appelAjax () {
        $("i.col.s5.m5.l4.waves-effect.waves-light.btn.waves-input-wrapper").hide();
        $("#panel2").hide();
        $("#panel").slideToggle("slow");
        var dateStr = $(this).val();
        //console.log(dateStr);

        $("select#visit_number.input-field.col.s12.form-control.initialized").change(function () {
            var nbVisiteur = $(this).val();
            //console.log(nbVisiteur);


            var date = $("#visit_date");
            var number = $("select#visit_number.input-field.col.s12.form-control.initialized");
            $.ajax({
                method: "POST",
                url: 'http://localhost/newP4/web/app_dev.php/ajax/number/' + $(date).val() + '\/' + $(number).val(),
                success: fonctionDeRappel
            });

            function fonctionDeRappel(data)
            {
                if (data === "Plus de tickets disponibles. Veuillez sélectionner une autre date. Merci.") {
                    $("#panel2").css('background-color', '#ffcdd2');
                    $("i.col.s5.m5.l4.waves-effect.waves-light.btn.waves-input-wrapper").hide();
                }
                if (data === "Vous pouvez poursuivre votre commande !") {
                    $("#panel2").css('background-color', '#b2dfdb');
                    $("i.col.s5.m5.l4.waves-effect.waves-light.btn.waves-input-wrapper").show();
                }
                $("#panel2").show("slow").html(data);
                //console.log(data);
            }

        });

    });

});







