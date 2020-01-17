
/******** NATIF - SCROLL MENU *********/

window.addEventListener('scroll', function (e) {

    var nav = document.querySelector('.navHeader');

    if( window.scrollY > 400 ) {

        nav.style.position = 'fixed';
        nav.style.top = '0';
        nav.style.zIndex = '100';

    } else if ( window.scrollY < 400 ) {

        nav.style.position = 'initial';
        nav.style.transitionDuration = '0.1s';
        nav.classList.add('change');
    }

    });

/**************************************/

/****** NATIF - TOOGLE MENU RESPONSIVE ********/

var btnMenuResponsive = document.querySelectorAll(".jsBtnCross");

for(var i = 0; i < btnMenuResponsive.length; i++){
    btnMenuResponsive[i].addEventListener('click', function(e){
        let nav = document.getElementById("menuJsResponsive");
        nav.classList.toggle('openMenu');
    });
}

/*********** DESC TREATEMENT ***********/

var widthWin = window.innerWidth;

if (widthWin <= 1280) {

    if(window.location.href == 'https://monblogtechnos.fr/') {

        var originalText = document.querySelector('.tutorialBlockContent p').textContent;
        var minifyDesc = originalText.slice(0,80);
        document.querySelector('.tutorialBlockContent p').innerHTML = minifyDesc + '...';

    }

}

/*********** IE EXCEPT ***********/

var userAgent = window.navigator.userAgent;

var msie = userAgent.indexOf('MSIE ');
var trident = userAgent.indexOf('Trident/');


 if (msie > 0) {
   

 } else if (trident > 0) {
      

 } else {
    var script = 'js/slider.js';
 }

/************************************/

/********** JQUERY CODE *************/

$(function(){

    $('.jsBtnSearch').click(function(){

        $("#coverSearch").slideToggle("slow");

    });

    $('.jsBtnSearchResponsive').click(function(){

        $("#coverSearch").slideToggle("slow");

    });

    $('#search').autocomplete({

        source : function(request, response){

            $.ajax({
                url:  'https://monblogtechnos.fr/ajax-request',
                dataType: 'json',
                data: {
                    title : $('#search').val(),
                },
                success: function(data){

                    response($.map(data, function(value){
                        return value;

                    }));

                }});
        },

        select : function(event,ui){
            $('#results').val(ui.item.value)
        }
    });

});




