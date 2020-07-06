$(document).ready(function(){
   
    if (document.cookie.indexOf("ModalShown=true")<0) {
        $("#modalAgeCheck").modal('show');
        document.cookie = "ModalShown=true; expires=Tue, 14 July 2020 00:00:00 GMT; path=/";
    }

    $("#noButton").on('click', function(){
        window.location.href = 'https://google.com';
    });
});