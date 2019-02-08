
$(document).ready(function() {


//Слайдер для акции

function slideshare() {

var slides_share = document.querySelectorAll('div.slide-share');


var width_frameslide_share = parseInt($(".frame-slide-share").css('width'));
$(".viewport-share").css('width', width_frameslide_share*slides_share.length);
$(".slide-share").css('width', width_frameslide_share);


$(".slideto-share").click(function() {
var style = window.getComputedStyle($('.slide-share').get(0));
var matrix = new WebKitCSSMatrix(style.webkitTransform);
var x = matrix.m41;


if (slides_share.length == 1) {
  if (x == 0) {$(".slide-share").css('transform', 'translateX(0px)');}

}

if (slides_share.length == 2) {
  if (x == 0) {$(".slide-share").css('transform', 'translateX(-'+width_frameslide_share+'px)');}
  if (x == -1*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(0px)');} 
}

if (slides_share.length == 3) {
  if (x == 0) {$(".slide-share").css('transform', 'translateX(-'+width_frameslide_share+'px)');}
  if (x == -1*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(-'+(2*width_frameslide_share)+'px)');}
  if (x == -2*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(0px)');} 

}

if (slides_share.length == 4) {
  if (x == 0) {$(".slide-share").css('transform', 'translateX(-'+width_frameslide_share+'px)');}
  if (x == -1*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(-'+(2*width_frameslide_share)+'px)');}
  if (x == -2*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(-'+(3*width_frameslide_share)+'px)');} 
  if (x == -3*width_frameslide_share) {$(".slide-share").css('transform', 'translateX(0px)');} 


}

});

}

slideshare();


function buttonslide_del() {
  var slides = document.querySelectorAll('.slide-share');
     
     if ((slides.length == 1) || (slides.length == 0)) {
         $(".slideto-share").css("display", "none");
     } 
}

buttonslide_del();



//Слайдер для товаров
function slideproducts() {
var slides_products = document.querySelectorAll('div.slide-products');


 var width_frameslide_products = parseInt($(".frame-slide-products").css('width'));

$(".viewport-products").css('width', width_frameslide_products*slides_products.length);
$(".slide-products").css('width', width_frameslide_products);

$(".slideto-products").click(function() {
var style = window.getComputedStyle($('.slide-products').get(0));
var matrix = new WebKitCSSMatrix(style.webkitTransform);
var x = matrix.m41;



for (var i = 0; i < slides_products.length; i++) {
      
       if ((x == -1*i*width_frameslide_products) && ((i+1)!= slides_products.length )) {

            $(".slide-products").css('transform', 'translateX(-'+(i+1)*width_frameslide_products+'px)');
            break;
            
      }
          
          if ((i+1)!= slides_products.length) {
              $(".slide-products").css('transform', 'translateX(-'+(0*width_frameslide_products)+'px)');
          }
     

}

});



$(".slideback-products").click(function() {

var style = window.getComputedStyle($('.slide-products').get(0));
var matrix = new WebKitCSSMatrix(style.webkitTransform);
var x = matrix.m41;



for (var i = 0; i < slides_products.length; i++) {
      
        if (x == 0) {
           $(".slide-products").css('transform', 'translateX(-'+ ((slides_products.length-1)*width_frameslide_products) +'px)');
            break;
       }

      if ((x == -1*i*width_frameslide_products)) {
          $(".slide-products").css('transform', 'translateX('+ (x + width_frameslide_products) +'px)');
            break;
            
      }
          
        
}
          
});

}


slideproducts();


//будем пытаться заскриптить скролл




/*
$(document).ready(function() {
  $(window).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(event) {
    delta = parseInt(event.originalEvent.wheelDelta || -event.originalEvent.detail);
    if (delta >= 0) {
     //alert("вверх");
       animate_position(0);
    } else {
      //alert("вниз");
      animate_position(1);
    }
  });
})

*/


/*
$(window).bind('mousewheel', function(event) {
if (event.originalEvent.wheelDelta >= 0) {
    //alert('Scroll up');
    animate_position(0);

    //alert("up");
}
else {
   //alert('Scroll down');
   animate_position(1);
  //alert("dowm");
}

});
*/


/* Скрипты для прокрутки */


// n - иднекс позиционирования
// функция для смены положения блока 

 $(".header-page").animate({
    top: "0"
  }, 1 );

  $(".header-page").animate({
    top: "0"
  }, 1 );

function animate_position(n) {
    
    $(".header-page").animate({
    top: "-"+(n*($(window).height()))
  }, 1 );

    $(".shares").animate({
    top: "-"+(n*($(window).height()))
  }, 1);

 $(".products").animate({
    top: "-"+(n*($(window).height()))
  }, 1);

 $(".contact").animate({
    top: "-"+(n*($(window).height()))
  }, 1); 

  $(".delivery").animate({
    top: "-"+(n*($(window).height()))
  }, 1);
}



function setmenu(color,color_logo,id_list) {

   $(id_list).css({color:color});
   //$(".menu-logo svg").css({fill:color_logo});
   $("#frame-header").css({color:color_logo});
}

function defaultmenu(id_list) {
	$(id_list).css({color:"black"});
}


var isHeader = false;
var isShares = false;
var isContact = false;
var isDelivery = false;
var isProducts = false;
var id_list = "";

animate_position(0);
     setmenu("#C20000","#C20000","#frame-header");
     defaultmenu(id_list);


$("#frame-header").click(function(){

    animate_position(0);
     isHeader = true;
     isShares = false;
     isContact = false;
     isDelivery = false;
     isProducts = false;
     setmenu("#C20000","#C20000","#frame-header");
     defaultmenu(id_list);

});

$("#frame-shares").click(function(){

    animate_position(2);
     isHeader = false;
     isShares = true;
     isContact = false;
     isDelivery = false;
     isProducts = false;
     defaultmenu(id_list);
     setmenu("#C20000","black","#frame-shares");
     id_list = "#frame-shares";


});

$("#frame-products").click(function(){

    animate_position(1);
     isHeader = false;
     isShares = false;
     isContact = false;
     isDelivery = false;
     isProducts = true;
     defaultmenu(id_list);
     setmenu("#C20000","black","#frame-products");
     id_list = "#frame-products";

      $(".group-product").css("display","block");
      $(".options_product").css("display","none");
      $(".gradient-products").css("width",""+($(".group-product").css("width"))); 




});

$("#frame-delivery").click(function(){

    animate_position(3);
     isHeader = false;
     isShares = false;
     isContact = false;
     isDelivery = true;
     isProducts = false;
     defaultmenu(id_list);
     setmenu("#C20000","black","#frame-delivery");
     id_list = "#frame-delivery";


});


$("#frame-contact").click(function(){

    animate_position(4);
     isHeader = false;
     isShares = false;
     isContact = true;
     isDelivery = false;
     isProducts = false;
     defaultmenu(id_list);
     setmenu("#C20000","black","#frame-contact");
     id_list = "#frame-contact";

});




$(".main-frame").css({height:""+$(window).height()+"px"});
$(".frame-cont").css({height:""+$(window).height()+"px"});







//динамически меняет высоту контейнера



   $(window).resize(function () {
     
     slideshare();
     slideproducts();


     $(".main-frame").css({height:""+$(window).height()+"px"});
     $(".frame-cont").css({height:""+$(window).height()+"px"});
     if (isabout) {
     $(".gradient-products").css("width",""+($(".frame_pr").css("width"))); 
     
      }

      else {
      $(".gradient-products").css("width",""+($(".group-product").css("width"))); 
     
     } 
  
     
     if (isHeader == true) {animate_position(0);}
     if (isShares == true) {animate_position(2);}
     if (isProducts == true) {animate_position(1);}
     if (isDelivery == true) {animate_position(3);}
     if (isContact == true) {animate_position(4);}

     //ценртрирую эти блоки
     $(".cont-callback ").center_callback();
     $(".cont-myselfcall").center_myselfcall();

     //минимальная высота - 1440
     //минимальная ширина - 320



/*
     if (($(window).height()) < 340 ) {

       $(".main-frame").css({height:"340px"});
       $(".frame-cont").css({height:"340px"});
  
     }
     */
     
});



function setupsize() {
$(".gradient-products").css("width",""+($(".group-product").css("width"))); 




}

setupsize();





//Карта
/*
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.624908, 37.263595],
            zoom: 16,
            controls: []
        }, {
            searchControlProvider: 'yandex#search'
        });

myMap.geoObjects.add(new ymaps.Placemark([55.624908, 37.263595], {
            balloonContent: 'Мы здесь',
            iconCaption: 'Хозяйственник.ру'
        }, {
            preset: 'islands#blueCircleDotIconWithCaption',
            iconCaptionMaxWidth: '200'
        }));
}
*/



//работаем с колбеком


 $(".bottom-cont p").click(function() {
    //alert("hello");
     $(".popup_callback").css("display","block");
     $(".cont-callback").center_callback();
     $(".cont-myselfcall").center_myselfcall();


 });

 $(".button-trigger").click(function() {
    //alert("hello");
    /*
     $(".popup_callback").css("display","block");
     $(".cont-callback").center_callback();
     $(".cont-myselfcall").center_myselfcall();
     */
     animate_position(1);
     isHeader = false;
     isShares = true;
     isContact = false;
     isDelivery = false;
     isProducts = false;
     defaultmenu(id_list);
     setmenu("#C20000","black","#frame-shares");
     id_list = "#frame-shares";

 });

//убираем попуп при нажатии на esc
 $("body").keyup(function(e) {

         if (e.which == 27) {
            $(".popup_callback").css("display","none");
         }
});

//центрирую эти блоки
jQuery.fn.center_callback = function () {
this.css("position","absolute");
this.css("top", (($(".column-1").height() - this.outerHeight()) / 2) + $(".column-1").scrollTop() + "px");
this.css("right", "10px");
return this;
}

$(".cont-callback").center_callback();


jQuery.fn.center_myselfcall = function () {
this.css("position","absolute");
this.css("top", (($(".column-2").height() - this.outerHeight()) / 2) + $(".column-2").scrollTop() + "px");
this.css("left", "10px");
return this;
}
$(".cont-myselfcall").center_myselfcall();

//маска для инпута
var inputsTel = document.querySelectorAll('input[type="tel"]');

Inputmask({
  "mask": "+7 (999) 999-99-99",
}).mask(inputsTel);


var isOpenCallback = false;
var isOpenMyselfcall = false;

$(".cont-callback").click(function() {

$(".cont-callback").css("opacity","1");
$(".cont-callback .title-frame").css("color","#C20000");

if (isOpenMyselfcall == true) {
       $(".cont-myselfcall").css("opacity","0.7");
       $(".cont-myselfcall .title-frame").css("color","rgba(128, 128, 128, 0.7)");
    }

     $(".cont-callback").animate({
       height: "500"
  }, 0);
      $(".cont-myselfcall").animate({
       height: "98"
  }, 0);

     $(".group-callback").css("display", "block");
     $(".group-myselfcall").css("display", "none");


$(".cont-callback").center_callback();
$(".cont-myselfcall").center_callback();

isOpenCallback = true;

});


$(".cont-myselfcall").click(function() {
    
    $(".cont-myselfcall").css("opacity","1");
    $(".cont-myselfcall .title-frame").css("color","#C20000");

    if (isOpenCallback == true) {
       $(".cont-callback").css("opacity","0.7");
       $(".cont-callback .title-frame").css("color","rgba(128, 128, 128, 0.7)");
    }

      $(".cont-myselfcall").animate({
       height: "500"
  }, 0);

     $(".cont-callback").animate({
       height: "98"
  }, 0);

     $(".group-callback").css("display", "none");
     $(".group-myselfcall").css("display", "block");

$(".cont-myselfcall").center_callback();
$(".cont-callback").center_callback();

isOpenMyselfcall = true;
});



$(".popup-close").click(function() {
     $(".popup_callback").css("display","none");
});



$(".close-cover").on("click",function(){
      
      $(".popup_callback").css("display","none");

});


//начинаем работу с товарами
//меняем цвета
/*
 

*/






//Используем технологию ajax

$("#form-col-2").submit(function() {
  
  $.ajax({
     type: "POST",
     url:"send.php",
     data: $(this).serialize()
  }).done(function() {
    $(this).find("input").val("");
     alert("Спасибо за заявку!\nМы скоро с вами свяжемся!");
     $("#form-col-2").trigger("reset");
  });
   return false;
});


$("#form-col-1").submit(function() {
  
  $.ajax({
     type: "POST",
     url:"send.php",
     data: $(this).serialize()
  }).done(function() {
    $(this).find("input").val("");
     alert("Спасибо за заявку!\nМы скоро с вами свяжемся!");
     $("#form-col-1").trigger("reset");
  });
  return false;
});




//Прогаем обновленый блок "товары"


$(".aboutprod").click(function() {

  $(".gradient-products").css("width",""+($(".frame_pr").css("width"))); 
  $(".group-product").css("display","none");
  $(".options_product").css("display","block");
  isabout = true;
   //Вставляем фото
   var photo =  $(this).data("iproduct");
  $(".product-optiontset").css('background-image','url('+photo+')');
  //Вставляем заголовок
  var title = document.querySelector('div.optiontstitle h3');
  title.innerHTML = ""+($(this).data("tproduct"))+"";
  //Вставляем описание
 var description = document.querySelector('div.optiontd p');
 description.innerHTML = ""+($(this).data("dproduct"))+"";
 //Вставляем вторую фотку
  var secphoto = $(this).data("secphoto");
  $(".contforphoto").css("background-image","url("+secphoto+")");

    //Собираем данные про данный твоар
    var arr_1 = new Array(
      $(this).data("size-1"),
      $(this).data("weight-1"),
      $(this).data("thing-1"),
      $(this).data("price-1"),
      $(this).data("whole-1"));

    var arr_2 = new Array(
      $(this).data("size-2"),
      $(this).data("weight-2"),
      $(this).data("thing-2"),
      $(this).data("price-2"),
      $(this).data("whole-2"));

     var arr_3 = new Array(
      $(this).data("size-3"),
      $(this).data("weight-3"),
      $(this).data("thing-3"),
      $(this).data("price-3"),
      $(this).data("whole-3"));

     var arr_4 = new Array(
      $(this).data("size-4"),
      $(this).data("weight-4"),
      $(this).data("price-4"),
      $(this).data("thing-4"),
      $(this).data("whole-4"));

     //Массив массивов :)
     var arrayofdata = new Array(arr_1,arr_2,arr_3,arr_4);


var paramsop_optionts_1  = document.querySelectorAll('.paramsop-optionts-1');
var paramsop_optionts_2  = document.querySelectorAll('.paramsop-optionts-2');
var paramsop_optionts_3  = document.querySelectorAll('.paramsop-optionts-3');
var paramsop_optionts_4  = document.querySelectorAll('.paramsop-optionts-4');

//Собираем все ссылки на теги в массив
var array_paramsop_optionts = new Array(
document.querySelectorAll('.paramsop-optionts-1'),
document.querySelectorAll('.paramsop-optionts-2'),
document.querySelectorAll('.paramsop-optionts-3'),
document.querySelectorAll('.paramsop-optionts-4')
  );

for (var j = 0; array_paramsop_optionts.length > j; j++) {
   
   for (var i = 0; paramsop_optionts_1.length > i; i++) {
        
       var param = array_paramsop_optionts[j];
       var data = arrayofdata[j];
        param[i].innerHTML = ""+data[i];
}

}
 
 $(".contforphoto").css("background-image","url("+$(this).data("photovkladish4675")+")");
 $(".title_pp4575").text($(this).data("title-1"));
 $(".title_ppvk4675").text($(this).data("title-2"));
 $(".title_pptermo5090").text($(this).data("title-3"));
 $(".title_pptermo55105").text($(this).data("title-4"));

});


var isabout = false;

$(".backto").click(function() {
  $(".options_product").css("display","none");
  $(".group-product").css("display","block");
  $(".gradient-products").css("width",""+($(".group-product").css("width"))); 
  isabout = false;

});



//прогаем вкладки

var oldc;
var isfirst = true;
 $(".photo-item-options").css("display", "none");
$(".button-item-options-show").click(function() {
    





    var count = $(this).data("itemop");

   if (count == 2) {
                $(".photo-item-options").css("display", "block");
              }
             




     for (var i = 1; i <= 4; i++) {
        
        if (count == i) {

          if (!isfirst) {
            var countold = document.querySelector('div.show-'+oldc);
            countold.className = countold.className.replace("active","");
            countold.style.height = "45px";
             $(".btn-show-"+oldc).css("display","block");
             $(".btn-close-"+oldc).css("display","none");
              $(".show-"+oldc+" p").css("border-bottom", "none");
              $(".group-options-"+oldc).css("display", "none");
              $(".contforphoto").css("display","none");


          }
        
         var countnew = document.querySelector('div.show-'+count);
         oldc = count;
         countnew.className += " active";
         
        
    
       $(".active").animate({
           height: "300px"
           }, 300 );
      
     isfirst = false;

    $(".btn-show-"+count).css("display","none");
    $(".btn-close-"+count).css("display","block");
    $(".show-"+count+" p").css("border-bottom", "1px solid rgba(128, 128, 128, 0.3)");
    $(".group-options-"+count).css("display", "block");

        
   }

   }

   


});


$(".button-item-options-close").click(function() {



     var count = $(this).data("itemop");
     $(".show-"+count).animate({
           height: "45px"
           }, 300 );

   var oldc = $(this).data("itemop");
   var countold = document.querySelector('div.show-'+oldc);
    countold.className = countold.className.replace("active","");
  
  $(".button-item-options-show").css("display","block");
  $(".button-item-options-close").css("display","none");
  $(".item-options p").css("border-bottom", "none");
  $(".group-options").css("display", "none");
  $(".photo-item-options svg path").css("fill","#808080");
  $(".contforphoto").css("display","none");
  $(".photo-item-options").css("display", "none");

});


var activephoto = true;

$(".photo-item-options").click(function() {
 
  
   
    
    $(".group-options-2").css("display","none");
    var item_2 = document.querySelector('div.show-2');
     
     if(item_2.classList.contains('active')) {
                  activephoto = !activephoto;
                  $(".photo-item-options svg path").css("fill","#C20000");
                  $(".contforphoto").css("display","block");

               

                    if (activephoto) {
             $(".group-options-2").css("display","block");
             $(".contforphoto").css("display","none");
             $(".photo-item-options svg path").css("fill","#808080");
          }
          
            }
        

});






});






