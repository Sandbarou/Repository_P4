$("document").ready(function () {
    $("#visit_date").change(function () {
        var dateStr = $(this).val();
        console.log(dateStr); // 20171006

        $.ajax({
            method: "POST",
            url: 'http://localhost/newP4/web/app_dev.php/get/date/' + $(this).val(),
            //url: "{{ path('oc_louvre_getDate')}}",
            beforeSend: function () {
                console.log('ça charge !');
            },
            success: function (data) {
                $("#ajaxholder").html(data);
                console.log(data);
            }
        });
    });



    $("select#visit_number.input-field.col.s12.form-control.initialized").change(function () {
        var nbVisiteur = $(this).val()
     //    $("#ajaxholder").html(data);
        console.log(nbVisiteur);
    });


});

/*
   id = #visit_date
class = .select-dropdown


//        var dateStr = $(this).val();
//        console.log(dateStr); // 2014-01-01T23:28:56.782Z
//        var strg = JSON.stringify(dateStr);
//        console.log(strg); // "2014-01-01T23:28:56.782Z" 
//        var json = JSON.parse(strg);
//        console.log(json); // 2014-01-01T23:28:56.782Z
//        var date = new Date(dateStr);
//        console.log(date); // Wed Jan 01 2014 13:28:56 GMT-1000 (Hawaiian Standard Time)         


        //var test = dateStr      
        //var date = JSON.stringify(Date.dateStr);
        //console.log(date);
        //console.log(date); // "2014-01-01T23:28:56.782Z" 
        //console.log(date.toDateString()); // "2014-01-01T23:28:56.782Z" 
        //var strg = JSON.stringify(date);
        //console.log(strg); // "2014-01-01T23:28:56.782Z" 





console.log('ok ok ok!');
var data = {
        datevis : $("#datevisite").val(),
        nbvis : $("#nbvisiteur").val()
    }
    $.ajax({
        type: "POST",
        url: "{{ path('oc_louvre_date')}}",
        data: data,
        success: function (html) {
        //alert(html);
        $("#ajaxholder").html(data);
        
    }*/

/*    function showValues() {
        var str = $("form").serialize();
        $("#ajaxholder").text(str);
    }

    $("#testtest").on("change", showValues);
    showValues();*/

/*    function displayVals() {
        var singleValues = $("#single").val();
        var multipleValues = $("#multiple").val() || [];
        // When using jQuery 3:
        // var multipleValues = $( "#multiple" ).val();
        $("p").html("<b>Single:</b> " + singleValues +
            " <b>Multiple:</b> " + multipleValues.join(", "));
    }

    $("select").change(displayVals);
    displayVals();*/


/*    function displayVals2() {
            
        var datevis = $( "#datevisite" ).val();
        var nbvis = $( "#nbvisiteur" ).val();

        $( "#ajaxholder" ).html( datevis + " et " + nbvis);
        //alert(.html("Résultats: " + datevis " " + nbvis));
    
        }
    
    $("#testtest").change( displayVals2 );
        displayVals2();
    */




/*
        function displayVals() {
            
        var datevis = $( "#datevisite" ).val();
        var nbvis = $( "#nbvisiteur" ).val();

        $( "#ajaxholder" ).html( datevis + " " + nbvis);
        //alert(.html("Résultats: " + datevis " " + nbvis));
    
        }
    
    $("#testtest").change( displayVals );
        displayVals();
    });
*/





/*        function ajaxCall(date) {
            var list = $('#ajaxholder');
            $ajax({
                url: "{{ path('oc_louvre_getDate')}}",
                method: "post"
                data: {datevisite: date}
            }).done(function (msg) {
                refreshList();
            });
            
           --- 
                    $ajax({
                url: "{{ path('oc_louvre_getDate')}}",
                method: "post"
                data: 
            })
            ---
        }

        function refreshList() {
            ajaxholder.innerHTML = "";
            $.each(JSON.parse(msg['data']), function (i, item) {
                var li = document.createElement('li');
                var text = document.createTextNode(item.date + " " + item.number):
                    li.appendChild(text);
                list.appendChild(li);
            });
        }*/





/*
$(document).ready(function(){

    $("#testtest").change(function(){
        // call the controller to get the rendered data
        $.ajax({
            url: "/get/date/{date}"
        })
                .done(function( data ) {
                    // insert data into div
                    $("#myDiv").html(data);
                });
});
});
*/









/*<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
     $(function(){
         // récupérer id du formulaire
         $("#formcom").submit(function(){
             $("#loader").show();
             pseudo  = $(this).find("input[name=pseudo]").val();
             message = $(this).find("textarea[name=message]").val();
             $.post("addCom.php"), (pseudo: pseudo, com: message), function(data) {
                 $("#loader").hide();
                 if(data!="ok"){
                     $(".error").empty().append(data);
                 }
                 else {
                     $("#resultatAjax").hide().append(pseudo+" a écrit :<div class=\"com\">"+message+"</div>").slideDown();
                     $("#formcom").fadeOut();
                 }
             });
             return false;
        });     
     });   
        
</script>*/





/*
$(document).ready(function() {   

    $(".input-field col s12").keyup(function() {
            if ($(this).val().length === 1) {
                $.ajax({
                   type: 'get',
                   url: Routing.generate('check', {date:  $(this).val()}),
                   beforeSend: function() {
                       $(".ville option").remove();
                   },
                   success: function(data) {
                       $.each(data.ville, function(index,value) {
                           $(".ville").append($('<option>',{ value : value , text: value }));
                       });
                       $(".loading").remove();
                   }
                });
            } else {
                $(".ville").val('');
            }
        });    
*/

/*    
$("#testtest").change(function(){
    date  = $(this).form.date.val();
    number = $(this).form.number.val();
    alert(date+"---"+number);
});*/


/*    function ajaxCall(date){
        var list = $('#list');
        $ajax({
            url: "{{ path('test')}}",
            method: "post"
            data: {datenb: date}
        }).done(function(msg){
            refreshList();
        });
    }
    
    function refreshList() {
        list.innerHTML = "";
        $.each(JSON.parse(msg['data']), function(i, item) {
            var li = document.createElement('li');
            var text = document.createTextNode(item.date + " " + item.number):
            li.appendChild(text);
            list.appendChild(li);
        });
    } 
    */