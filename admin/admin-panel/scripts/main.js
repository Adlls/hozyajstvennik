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


//$(".setup").load("products.php");
$("#catalog").bind("click", function() {
  
 
       
       $(".setup").load("products.php");

        $.ajax({
       url: "getid_product.php",
       type: "POST"

     });
  
  



});



//$(".setup").load("edit_section/share-edit.php");
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

});








//Обрабатываем кнопку для редактора в файле editor.php




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
     
     if (cardnum > 0) {
      $(".add_markbook").css("display","none");
    }
    else {
      $(".add_markbook").css("display","block");

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

     if (cardnum > 0) {
       $(".add_markbook").css("display","none");
     }
     else {
      $(".add_markbook").css("display","block");

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
  
     if (cardnum_edit > 0) {
      $(".edit_markbook").css("display","none");
    }
    else {
     $(".edit_markbook").css("display","block");

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

     if (cardnum_edit > 0) {
      $(".edit_markbook").css("display","none");
    }
    else {
     $(".edit_markbook").css("display","block");

    }


});


$(".add_markbook").click(function () {
  var count_card = document.querySelectorAll('.ppvk4675.card_add'); 
  var card =  $("#add_card").clone(true).appendTo('.popup_add_product form');

  
  card.children('.page_card').text(count_card.length+1);
  card.children('.button_delmb').css("display","block");
  $(".count_card").text("("+ (count_card.length+1) + ")");
  card.children('.button_delmb').data("count_card",""+(count_card.length+1));
  card.data("count_card_dv",""+(count_card.length+1));
  
});


$(".edit_markbook").click(function () {
  var count_card = document.querySelectorAll('.ppvk4675.card_edit'); 
  var card =  $("#edit_card").clone(true).appendTo('.popup_edit_product form');

  
  card.children(".form-group").children('.page_card').text(count_card.length+1);
  card.children('.button_delmb').css("display","block");
  $(".count_card").text("("+ (count_card.length+1) + ")");
  card.children('.button_delmb').data("count_card",""+(count_card.length+1));
  card.data("count_card_dv",""+(count_card.length+1));
  card.children(".form-group").children(".card_edit input").val("");


  $('<input>', { name: 'arr_addin[]', type: 'hidden', 'value': count_card.length }).appendTo('.popup_edit_product form .group_add');

   
  
});

$(".button_delmb").click(function () {

 var count_card = document.querySelectorAll('.ppvk4675.card_add'); 
 var index_btn = $(".button_delmb").index(this);

   for (var i = 0; i < count_card.length; i++) {
           if ( i == index_btn) {
                count_card[index_btn].remove();
           }
   }


   $(".count_card").text("("+ (count_card.length-1) + ")");

});


$(".button_delmb_edit").click(function() {
   
    $('<input>', { name: 'arr_delin[]', type: 'hidden', 'value': ($(".button_delmb_edit").index(this)) }).appendTo('.popup_edit_product form');
    $(this).parent().parent().remove();

});



//Закрываем и открываем попупы
$(".close_popup_product").click(function() {
   $(".popup_add_product").css("display","none");
   $(".popup_edit_product").css("display","none");
   $(".button_deletephoto").val("no");

   $(".card_edit").css("display","none");
   $(".append_card.card_edit").remove();


   $("input[name=\"arr_delin[]\"]").remove();
   $("input[name=\"arr_addin[]\"]").remove();
   cardnum_edit = 0;
    
  
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

var isFirstmb = true;
var count_page = 0;
var count_index_page = 0;
$(".edit_product").click(function() {
      $(".start_editfr").css("display","block");
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

        var j = 0;

           for (var i = 0; i < products.length; i++) {
              if (products[i].id_product == id) {
                 
                 $(".card_edit input[name=\"name_product\"]").val(products[i].name_product);
                 $(".card_edit textarea[name=\"desc_product\"]").val(products[i].description_product);
                 $(".photo_name").text(products[i].photo);

              }


                if ((products[i].type_opt == "pp_vkladish4675")
                   &&(products[i].product_id_product==id)) {


                    count_page++;
                    count_index_page = count_page - 1;

                    console.log(count_page);

                  if (isFirstmb) {
                    var card_first = $("#edit_card");
                    card_first.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_size[]\"]").val(products[i].size);
                    card_first.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_weight[]\"]").val(products[i].weight);
                    card_first.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_pack[]\"]").val(products[i].pack);
                    card_first.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_price[]\"]").val(products[i].price);
                    card_first.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_supply[]\"]").val(products[i].supply);
                    card_first.children(".form-group").children(".photo_ppvkladish4675").text(products[i].photo);
                    card_first.children(".form-group").children(".card_edit input[name=\"title_ppvk4675[]\"]").val(products[i].title_pp_vkladish4675);
                    card_first.children(".form-group").children(".page_card").text(count_page);
                    card_first.children(".button_delmb_edit").data("count_card_edit",""+count_index_page);

                    isFirstmb = false;
                  }
                  else {
                  var card =  $("#edit_card").clone(true).appendTo('.popup_edit_product form');
                  card.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_size[]\"]").val(products[i].size);
                  card.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_weight[]\"]").val(products[i].weight);
                  card.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_pack[]\"]").val(products[i].pack);
                  card.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_price[]\"]").val(products[i].price);
                  card.children(".form-group").children(".card_edit input[name=\"ppvkladish4675_supply[]\"]").val(products[i].supply);
                  card.children(".form-group").children(".photo_ppvkladish4675").text(products[i].photo);
                  card.children(".form-group").children(".card_edit input[name=\"title_ppvk4675[]\"]").val(products[i].title_pp_vkladish4675);
                  card.children(".form-group").children(".page_card").text(count_page);
                  card.children(".button_delmb_edit").data("count_card_edit",""+count_index_page);
       
                  card.addClass("append_card");

                  }
                  j++;
              
                }
           }
           isFirstmb = true;
           count_page = 0;
          }
     });


$(".button_deletephoto").click(function() {
 
 var photo_name = $(this).siblings(".photo_ppvkladish4675").text();
 var count_page = parseInt($(this).siblings(".page_card").text())-1;
//alert(photo_name);
//alert(count_page);
 $('<input>', { name: 'arr_delphoto_name[]', type: 'hidden', 'value': (photo_name) }).appendTo('.popup_edit_product form');
 $('<input>', { name: 'arr_delphoto_count[]', type: 'hidden', 'value': (count_page) }).appendTo('.popup_edit_product form');


});

$(".addphoto_btn").click(function() {
  var count_page = parseInt($(this).siblings(".page_card").text())-1;
  $('<input>', { name: 'arr_addphoto_count[]', type: 'hidden', 'value': (count_page) }).appendTo('.popup_edit_product form');

});


});


$(".download_pdf").click(function() {
  
 

});





});

