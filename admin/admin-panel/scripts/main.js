$(document).ready(function() {






$(".click_btn").click(function(event){

var count = $(".for_count").text();


var inc = $(this).val();

for (var i = 0; i <= count; i++) {
  
   if (i == inc) {
     location.href = "http://localhost:8888/web-sites/manager%20of%20bags/admin/admin-panel/users.php?id_inc=" + inc;

   }

}

});

$(".addto").click(function(event) {

var count = $(".for_count").text();
var inc = $(this).val();

for (var i = 0; i <= count; i++) {
    if (i == inc) {
     location.href = "http://localhost:8888/web-sites/manager%20of%20bags/admin/admin-panel/users.php?id_add=" + inc;

   }
  }

});



function loading() {

//$(".load").text("Загрузка...");
}


function success_users(data) {
	//$(".setup").text(data);
}

function success_editor(data) {
	//$(".setup").text(data);
}

$("#users-show").bind("click", function() {
	
 
       
       $(".setup").load("users.php");


});


$("#catalog").bind("click", function() {
  
 
       
       $(".setup").load("products.php");

        $.ajax({
       url: "getid_product.php",
       type: "POST"

     });
  
  



});


$("#text-change").bind("click", function() {



     $(".setup").load("edit_section/share-edit.php");

});

$(".bookmarks-item-header").bind("click", function() {



     $(".setup").load("edit_section/header-edit.php");

});

$(".bookmarks-item-share").bind("click", function() {



     $(".setup").load("edit_section/share-edit.php");

});

$(".bookmarks-item-delivery").bind("click", function() {



     $(".setup").load("edit_section/delivery-edit.php");

});


var count_elem = $(".autoinc").text();
//alert(parseInt(count_elem));

$(".add_share").click(function(){
    
     count_elem++;
    
    $(".share-cont").append("<input type=\"file\" name=\"photo_share\" class=\" share_item photo-share count_elem"+count_elem+"\">");
    $(".share-cont").append("<input type=\"text\" name=\"title_share\" class=\"title-share count_elem"+count_elem+"\">");
    $(".share-cont").append("<textarea name=\"description_share\" class=\"description_share count_elem"+count_elem+"\"></textarea>");
    $(".share-cont").append("<button type=\"button\" name=\"delete_share\" class=\"delete_share\" id = \""+count_elem+"\">Удалить</button> <br class =\"count_elem"+count_elem+"\">");
});



 $(".share-cont").on("click", ".delete_share", function() {
    $(".count_elem"+this.id).remove();
    $("#"+this.id).remove();
    //alert(this.id);
});

 $(".save_share").click(function(){
  
  var len = document.querySelectorAll('.share_item');
  //alert(len.length);
});





//alert(fileval);


//Обрабатываем кнопку для редактора в файле editor.php


/*
 $(".edit_btn").bind("click",function() {

   var text_edited = $(".editor_text").text();

   $(".editor_text").text(text_edited);

   $.ajax({
    
    url: "paste_text.php",
    type: "POST",
    data:({text_paste: text_edited}),
    success: isFine

   });


 });
*/
/*

 $("body").keyup(function(e) {

         alert(e.which);
});
*/

$('.description-header').on('keydown', function( e ) {
  if( e.keyCode === 13 ) {
    e.preventDefault();
    whenEnterPressed();
  }
});

$('.description_share').on('keydown', function( e ) {
  if( e.keyCode === 13 ) {
    e.preventDefault();
    whenEnterPressed();

  }

});





//Настраиваем функционал стрелочек
function controlmovecard() {

  var card = document.querySelectorAll('.card');




}



var cardnum = 0;

/*
var card = document.querySelectorAll('.card');
    
cardnum = cardnum + 1;

if (cardnum < 5) {

   card[cardnum].style.display = "block";
   card[cardnum-1].style.display = "none";
}


if (cardnum >= 5) {
         
  card[4].style.display = "none";
  card[0].style.display = "block";
  cardnum = 0;
}

var card = document.querySelectorAll('.card');
     
     cardnum = cardnum - 1;

    if (cardnum >= 0) {
     card[cardnum].style.display = "block";
     card[cardnum+1].style.display = "none";
  }

     if (cardnum < 0) {
        card[0].style.display = "none";
        card[4].style.display = "block";
        cardnum = 4;
     }



*/





$(".move_right.add").click(function() {

    var card = document.querySelectorAll('.card_add');
    
     cardnum = cardnum + 1;

    
   

     if (cardnum < card.length) {

        card[cardnum].style.display = "block";
        card[cardnum-1].style.display = "none";
     }
     

    if (cardnum >= card.length) {
              
       card[card.length-1].style.display = "none";
       card[0].style.display = "block";
       cardnum = 0;
     }
    
});



$(".move_left.add").click(function() {

    var card = document.querySelectorAll('.card_add');
     
     cardnum = cardnum - 1;

    if (cardnum >= 0) {
     card[cardnum].style.display = "block";
     card[cardnum+1].style.display = "none";
  }

     if (cardnum < 0) {
        card[0].style.display = "none";
        card[card.length-1].style.display = "block";
        cardnum = card.length - 1;
     }


});

var cardnum_edit = 0;



$(".move_left.edit").click(function() {

     var card = document.querySelectorAll('.card_edit');
     
     cardnum_edit = cardnum_edit-1;

    if (cardnum_edit >= 0) {
     card[cardnum_edit].style.display = "block";
     card[cardnum_edit+1].style.display = "none";
  }

     if (cardnum_edit < 0) {
        card[0].style.display = "none";
        card[card.length-1].style.display = "block";
        cardnum_edit = card.length-1;
     }
});

$(".move_right.edit").click(function() {

      var card = document.querySelectorAll('.card_edit');
    
     cardnum_edit = cardnum_edit + 1;

     if (cardnum_edit < card.length) {

        card[cardnum_edit].style.display = "block";
        card[cardnum_edit-1].style.display = "none";
     }
     

    if (cardnum_edit >= card.length) {
              
       card[card.length-1].style.display = "none";
       card[0].style.display = "block";
       cardnum_edit = 0;
     }
});


$(".add_markbook").click(function () {
     
  $(".card.card_3.ppvk4675.card_add").clone().appendTo('.popup_add_product');

});



//Закрываем и открываем попупы
$(".close_popup_product").click(function() {
   $(".popup_add_product").css("display","none");
   $(".popup_edit_product").css("display","none");
     $(".button_deletephoto").val("no");
   
    // cardnum = 0;
     
     /*
     cardnum_edit = 0;
     var card = document.querySelectorAll('.card_add');
     card[4].style.display = "none";
     alert(cardnum_edit);
     */
  
});

$(".close_popup_delete").click(function() {
   $(".popup_delete").css("display","none");
 
});


//delete form
var id;

$(".del_product").bind("click", function() {
   $(".popup_delete").css("display","block");
     id = $(this).data("id");

 });

$('#delete_form').submit(function(){
  var startlocationurl = window.location.href;
  window.location.href = ""+"products.php?id="+id;
  $(".setup").load("products.php");
  return false;
});

$(".no_delete").click(function() {
    $(".popup_delete").css("display","none");

});

$(".add_product").click(function() {
   $(".popup_add_product").css("display","block");
});



//edit form
$(".edit_product").click(function() {
      $(".popup_edit_product").css("display","block");
      id = $(this).data("id");
      $("input[name=\"get_id_product\"]").val(id);
      

   $.ajax({
       url: "getid_product.php",
       type: "POST"

     });
  
  $.ajax({
       url: "getprudcts.json",
       type: "POST",
       dataType: 'text',
       success: function(data) {
        var products = $.parseJSON(data);
        console.log($.parseJSON(data));

          
           for (var i = 0; i < products.length; i++) {
              if (products[i].id_product == id) {
                 
                 $(".card_edit input[name=\"name_product\"]").val(products[i].name_product);
                 $(".card_edit textarea[name=\"desc_product\"]").val(products[i].description_product);
                 $(".photo_name").text(products[i].photo);

              }

              if ((products[i].type_opt == "pp4575")
                   &&(products[i].product_id_product==id)) {

                  $(".card_edit input[name=\"pp4575_size\"]").val(products[i].size);
                  $(".card_edit input[name=\"pp4575_weight\"]").val(products[i].weight);
                  $(".card_edit input[name=\"pp4575_pack\"]").val(products[i].pack);
                  $(".card_edit input[name=\"pp4575_price\"]").val(products[i].price);
                  $(".card_edit input[name=\"pp4575_supply\"]").val(products[i].supply);
                  $(".card_edit input[name=\"title_pp4575\"]").val(products[i].title_pp4575);
                }

                if ((products[i].type_opt == "pp_vkladish4675")
                   &&(products[i].product_id_product==id)) {

                  $(".card_edit input[name=\"ppvkladish4675_size\"]").val(products[i].size);
                  $(".card_edit input[name=\"ppvkladish4675_weight\"]").val(products[i].weight);
                  $(".card_edit input[name=\"ppvkladish4675_pack\"]").val(products[i].pack);
                  $(".card_edit input[name=\"ppvkladish4675_price\"]").val(products[i].price);
                  $(".card_edit input[name=\"ppvkladish4675_supply\"]").val(products[i].supply);
                  $(".photo_ppvkladish4675").text(products[i].photo);
                  $(".card_edit input[name=\"title_ppvk4675\"]").val(products[i].title_pp_vkladish4675);
                }

                
                if ((products[i].type_opt == "pptermo5090")
                   &&(products[i].product_id_product==id)) {

                  $(".card_edit input[name=\"pptermo5090_size\"]").val(products[i].size);
                  $(".card_edit input[name=\"pptermo5090_weight\"]").val(products[i].weight);
                  $(".card_edit input[name=\"pptermo5090_pack\"]").val(products[i].pack);
                  $(".card_edit input[name=\"pptermo5090_price\"]").val(products[i].price);
                  $(".card_edit input[name=\"pptermo5090_supply\"]").val(products[i].supply);
                  $(".card_edit input[name=\"title_ppvtermo5090\"]").val(products[i].title_pptermo5090);
                }

                if ((products[i].type_opt == "pptermo55105")
                   &&(products[i].product_id_product==id)) {

                  $(".card_edit input[name=\"pptermo55105_size\"]").val(products[i].size);
                  $(".card_edit input[name=\"pptermo55105_weight\"]").val(products[i].weight);
                  $(".card_edit input[name=\"pptermo55105_pack\"]").val(products[i].pack);
                  $(".card_edit input[name=\"pptermo55105_price\"]").val(products[i].price);
                  $(".card_edit input[name=\"pptermo55105_supply\"]").val(products[i].supply);
                  $(".card_edit input[name=\"title_ppvtermo55105\"]").val(products[i].title_pptermo55105);

                  console.log(products[i].product_id_product);
                }


           }

 
 


          }


     });


$(".button_deletephoto").click(function() {
    


  

  $("input[name='delete_sphoto']").val("yes");
  var name_file =  $(".photo_ppvkladish4675").text();
  $("input[name='photo_namefordel']").val(name_file);



     
});


});

});

