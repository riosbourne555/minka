jQuery.noConflict();

jQuery(document).ready(function($) {

    $('.ez-button-nav').click(function(){
        $('#menu').slideToggle();
         return false;
    });

});