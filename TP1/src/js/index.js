/*//temp
(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });
    
})(jQuery);

//second



//unused
var respuesta;
var data;



//cargar json
function leerJSON() {
    fetch("src/DB/basedata.json").then(response => {
          if (response.status == 200) {
              console.log('ok');
              console.log(response);
             ProcesarJSON();
          } else {
              console.log('ERROR');
              parametro("error",response.status);
          }
      })
}

//procesar datos
function ProcesarJSON(){
    fetch("src/DB/basedata.json").then(function(resp) {
    return resp.json()
}).then(function(data){
    dir=data.color;
    console.log(dir);
    return data;
})

}


function parametro(key,value) {
  key = encodeURIComponent(key);
    value = encodeURIComponent(value);

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    document.location.search = params;
}
*/

function cargarindex() { 
dato=[document.getElementById("a0"),document.getElementById("a1"),document.getElementById("a2"),document.getElementById("a3"),document.getElementById("a4"),document.getElementById("a5"),document.getElementById("a6"),document.getElementById("a7")];
carta=document.getElementsByClassName("texto");  
for (let index = 0; index < 8; index++) {
    dato[index].classList.add("card-img-top");
    dato[index].classList.add("img-fluid");
}

for (let index = 0; index < carta.length; index++) {
    carta[index].classList.add("mobilever");
    carta[index].classList.add("card-body");
}


}

function cargarprod() { 
    dato=document.getElementsByClassName("a");
    carta=document.getElementsByClassName("texto");  
    for (let index = 0; index < dato.length; index++) {
        dato[index].classList.add("card-img-top");
        dato[index].classList.add("img-fluid");
    }
    
    for (let index = 0; index < carta.length; index++) {
        carta[index].classList.add("mobilever");
        carta[index].classList.add("card-body");
    }
    
    
    }
    
    