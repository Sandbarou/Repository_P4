function afficherCalendrier()
{
    $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
       startDate: '-3d'
    });
}