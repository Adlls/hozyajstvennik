<?php
include('admin/admin-panel/database.php');

$result_set = $mysqli->query("SELECT * FROM `header_section`");

  $title_header = "";
  $promo_header = "";
  $description_header = "";
  $result_set_products = $mysqli->query("SELECT * FROM `product`");



  while (($row = $result_set->fetch_assoc()) != false) {

    $title_header = trim($row[title]);
  	$promo_header = trim($row[promo]);
  	$description_header = trim($row[description]);

}
//$mysqli->close();


include('admin/admin-panel/database.php');

$result_set = $mysqli->query("SELECT * FROM `share_section`");
   
$count_share = 0;

$arrshare_photo = array();
$arrshare_title = array();
$arrshare_description = array();

 while (($row = $result_set->fetch_assoc()) != false) {
    $count_share++;

   
    //$photo_share["photo_share".$count_share] = trim($row[photo]);
  	//$title_share["title_share".$count_share] = trim($row[title]);
  	//$description_share["description_share".$count_share] = trim($row[description]);

    array_push($arrshare_photo, trim($row[photo]));
    array_push($arrshare_title, trim($row[title]));
    array_push($arrshare_description, trim($row[description]));







}

//$mysqli->close();

?>


<!DOCTYPE html>
<html>
<head>
   <!-- <meta http-equiv="Cache-Control" content="no-cache, no-store"> -->
    <meta charset="utf-8">
    <meta name="description" content= "Крупнейший поставщик мешков и овощной сетки по всей России. 9 лет работы в этой сфере научили нас относиться к каждому, кто к нам обращается, не просто как к покупателю, а как к партнеру, которому выгодно и удобно сотрудничество именно с нами." />
    <meta name="Keywords" content="овощные сетки, полипропиленовые мешки, овощные сетки оптом, мешки оптом, полипропиленовые мешки оптом, сетка овощная купить, тара для овощей купить
мешок полипропиленовый купить">
   <!-- <meta name="viewport" content="width=device-width"> -->
    <title>Хозяйственник</title>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="styles/font-awesome/css/font-awesome.min.css">
    	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="styles/main.css">

    <script src="scripts/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.min.js"></script>

 
<script type="text/javascript" > 
 (function (d, w, c) { 
 (w[c] = w[c] || []).push(function() { 
 try { 
 w.yaCounter49997044 = new Ya.Metrika2({ 
 id:49997044, 
 clickmap:true, 
 trackLinks:true, 
 accurateTrackBounce:true, 
 webvisor:true 
 }); 
 } catch(e) { } 
 }); 
 
 var n = d.getElementsByTagName("script")[0], 
 s = d.createElement("script"), 
 f = function () { n.parentNode.insertBefore(s, n); }; 
 s.type = "text/javascript"; 
 s.async = true; 
 s.src = "https://mc.yandex.ru/metrika/tag.js"; 
 
 if (w.opera == "[object Opera]") { 
 d.addEventListener("DOMContentLoaded", f, false); 
 } else { f(); } 
 })(document, window, "yandex_metrika_callbacks2"); 
</script> 
<noscript><div><img src="https://mc.yandex.ru/watch/49997044" alt="" /></div></noscript> 

<!-- <link rel="stylesheet" type="text/css" href="styles/adaptive.css"> -->
<body>

<div class="main-frame">

	<div class="menu clearfix">
    <div class="menu-top-logo">
    <div class="logo" id="frame-header">ХОЗЯЙСТВЕННИК.РУ</div>
    <div class="mo">Пн-Пт: с 10:00 до 19:00<br> Сб: с 10:00 до 14:00</div>
    </div>
		<div class="menu-top">
<!--
		<div class="menu-logo">
			<div class="cover-logo" id="frame-header">
           <svg width="60" height="80" viewBox="0 0 60 80" fill="" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M31.2142 17.4645L34.147 16.7472L38.2395 15.7461C38.877 15.5903 39.5556 15.6895 40.1104 16.0195C40.6647 16.3492 41.044 16.88 41.1548 17.4812L41.463 19.1532L45.7993 19.0547C45.9751 18.9598 46.1236 18.8219 46.2259 18.6515L53.4793 6.57656C53.9991 5.71079 53.0739 4.71403 52.0694 5.05802L45.503 7.30665C43.5649 7.97037 41.3906 7.62507 39.8034 6.40144L37.3566 4.5154C36.9917 4.23407 36.4775 4.1883 36.0611 4.40009L31.8717 6.5315C30.3191 7.32141 28.4599 7.40794 26.8294 6.76619L26.2153 6.52449C25.1868 6.11968 24.1987 7.16809 24.7732 8.05459L30.5669 16.9941C30.7163 17.2247 30.9494 17.3884 31.2142 17.4645ZM26.2734 18.6731L20.8133 10.2482C17.9405 5.81556 22.8808 0.573597 28.0236 2.59764L28.6376 2.83934C28.9637 2.96769 29.3356 2.95038 29.6461 2.7924L33.8356 0.661003C35.9172 -0.398006 38.4881 -0.16922 40.3127 1.23741L42.7598 3.12348C43.0771 3.36821 43.5118 3.43726 43.8996 3.30452L50.466 1.05589C55.4882 -0.664008 60.1153 4.31968 57.5148 8.64853L51.317 18.9668C52.4103 19.1313 53.257 19.9963 53.2851 21.0573L53.427 26.3686L54.0564 26.3541C54.6792 26.3401 55.2824 26.5549 55.7333 26.9523C56.1857 27.3498 56.4465 27.8961 56.4619 28.4721L56.6612 35.956C56.6931 37.1553 55.6683 38.1518 54.3714 38.1813L53.7428 38.1959L53.8833 43.508C53.9152 44.7069 52.89 45.7027 51.5936 45.7326L51.3058 45.739L51.4462 51.0521C51.4739 52.0896 50.7103 52.9748 49.6647 53.2138L59.7576 71.9551C60.3258 73.0099 59.8611 74.291 58.72 74.8163C57.579 75.3416 56.1934 74.9123 55.6252 73.8571L44.9983 54.125C44.8033 53.7626 44.4032 53.5336 43.9654 53.5336H40.1854C37.7332 53.6164 34.4553 53.673 33.8277 53.4173C33.4688 53.2711 33.1546 53.0463 32.9166 52.7625C32.6198 52.4086 32.4383 51.968 32.4254 51.486L32.2754 45.8834L17.2914 78.6954C16.7956 79.7812 15.4416 80.2898 14.2672 79.8314C13.0928 79.373 12.5427 78.1214 13.0385 77.0356L19.1673 63.615L10.4607 70.376C9.48453 71.1339 8.02857 71.0168 7.20867 70.1142C6.38877 69.2119 6.51541 67.8657 7.49154 67.1078L23.1112 54.9786L31.9918 35.5317L32.0004 35.5331L31.8273 29.0338C31.7953 27.8345 32.8204 26.8384 34.117 26.8088C35.4138 26.7791 36.4904 27.7275 36.5223 28.9268L36.6639 34.2398L39.4664 34.1758L37.0083 20.834L36.9942 20.8027C36.9915 20.7966 36.9892 20.7939 36.9874 20.7922C36.9851 20.7899 36.9814 20.787 36.9762 20.7846C36.9711 20.7821 36.9664 20.781 36.963 20.7805C36.9605 20.7802 36.9569 20.78 36.9499 20.7815L32.8382 21.6473C32.5618 21.7054 32.2844 21.7443 32.0079 21.7644L24.3116 23.6469L17.8504 42.2273C17.6729 42.7387 17.2967 43.1708 16.7946 43.4404L3.52805 50.5692C2.49916 51.1219 1.2047 50.8711 0.494854 50.025C0.430944 49.9486 0.371914 49.8675 0.318004 49.7817C-0.33319 48.7443 0.0476086 47.4149 1.16902 46.8124L13.6558 40.103L20.2337 21.1853C20.4791 20.4806 21.0951 19.9398 21.8691 19.7504L26.2734 18.6731ZM42.1916 49.09L37.7684 49.191C37.3588 49.0409 37.0628 48.6799 37.0406 48.2492L37.0328 48.0967L36.9784 46.0662L46.6102 45.8461L46.6937 48.9872L42.192 49.09H42.1916ZM42.8109 23.4684L42.26 23.4809L42.8367 26.6104L48.7314 26.4756L48.6479 23.3357L46.194 23.3914C45.8743 23.4422 45.5477 23.4684 45.2168 23.4684H42.8109ZM51.8248 30.751L43.6342 30.9379L44.2108 34.0676L51.9082 33.8919L51.8248 30.751ZM43.2179 38.4364L42.632 38.4495L36.7793 38.5829L36.8628 41.723L48.8426 41.4491C48.846 41.4491 48.8499 41.4491 48.8534 41.4491L48.8603 41.4495L49.1311 41.4434L49.048 38.3033L43.2179 38.4364Z" fill=""/>
</svg>

  </div>
   </div>
  -->
	</div>
      <div class="menu-mo">
      <div class="menu-list">
        <ul>
      <li id="frame-products"> Товары </li>
      <li id="frame-shares"> Акции </li>
			<li id="frame-delivery"> Доставка </li>
			<li id="frame-contact"> Контакты </li>
    <!-- <li id= "mo-list">Пн-Пт: с 10:00 до 19:00 <br> Сб: с 10:00 до 14:00</li> -->
		</ul>
</div>

<div class="mo-menu"><a href="tel:+74957720298" style="color:#808080; text-decoration: none">+7 (495) 772-02-98</a><br><a href="mailto:order@hozyajstvennik.ru?subject=order" style="text-decoration: none; color:#808080; ">order@hozyajstvennik.ru</a></div>
     </div>
	</div>
<div class="bottom-cont clearfix">
	<p><?= $promo_header ?></p>
	<div class="download_price"><a href="hoz.pdf">Прайс-лист в PDF</a></div>
	</div>

<header class="header-page frame-cont">
  
   <div class="promo">
	<!--<h2 class="title-promo"><?= $title_header ?></h2> -->
  <p class="description-promo">
    Компания Хозяйственник с 2009 года на рынке тары и упаковочной продукции. С тех пор мы зарекомендовали себя как надежный партнер, работать с которым — выгодно. Более 100 компаний по всей России покупают мешки и сетку у нас. Наши главные преимущества:
  </p>

  <div class="description-list">
    <ul>
      <li><span>Эксклюзивные цены от производителя. </span></li>
      <li><span>Собственная линия производства мешков и сетки на заводах Китая и России.</span></li>
      <li><span>Офис и склад в одном месте. Вам не придется тратить лишнее время при самовывозе.</span></li>
      <li><span>Оплаченный товар может по договоренности отгружаться в нерабочее время и выходные дни</span></li>
      <li><span>На весь товар по запросу предоставляется сертификат качества.</span></li>
      <li><span>Бесплатная доставка по Москве при заказе от 100 000 руб.</span></li>
    </ul>
  </div>

  </div>
</header>


<section class="products frame-cont">

<div class="gradient-products"></div>

<div class="frame_contact  frame_pr">

<div class="options_product">
 <div class="cont-products cont-productsopt">
    <div class="photo-products product-optiontset"></div>

    <div class="title-products optiontstitle">
      <h3></h3>
    </div>
    <div class="description-products optiontd">
      <p></p>
    </div>
    <div class="btn-cont btn_back-cont"><button class="btn-products product_1 backto">назад</button></div>
  </div>

  <div class="clearfix">
  <div class="cont-options-right">
  <!--
      <div class="item-options show-1">
        <p class="title_pp4575">П/п (45x75)</p>
        <div class="button-item-options-show btn-show-1" data-itemop="1">Подробнее</div>
        <div class="button-item-options-close btn-close-1" data-itemop="1">Свернуть</div>
      
        <div class="group-options group-options-1">
      <div><h5>Размер, см </h5> <div class="line-inner" style="width: 58%;"></div>  <span class="paramsop paramsop-optionts-1"></span></div>
      <div><h5>Вес, грамм</h5> <div class="line-inner" style="width: 55%;"></div>  <span class="paramsop paramsop-optionts-1"></span></div>
      <div><h5>Упаковка, штук</h5> <div class="line-inner" style="width: 45%;"></div>  <span class="paramsop paramsop-optionts-1"></span></div>
      <div><h5>Цена, рублей/штука</h5> <div class="line-inner" style="width: 40%"></div> <span class="paramsop paramsop-optionts-1"></span></div>
      <div><h5>Оптовые поставки</h5> <div class="line-inner" style="width: 13%;"></div>  <span class="paramsop paramsop-optionts-1"></span></div>
        </div>

      </div>
    -->
      <div class="item-options show-2">
        <p class="title_ppvk4675">П/п + ПЭ вкладыш (46x75)</p>
        <div class="contfordelt"><div class="photo-item-options" data-itemop="2"> <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.7099 5.34848L24.3516 5.33079L21.1341 0.495869C20.9406 0.194772 20.6066 0 20.2549 0H11.5868C11.2352 0 10.9187 0.194835 10.7253 0.478179L7.40225 5.33079L4.29016 5.34848C1.93409 5.34848 0 7.29664 0 9.66979V23.6433C0 26.0165 1.93409 28 4.29009 28H27.7099C30.066 28 32 26.0165 32 23.6433V9.66979C32.0001 7.29664 30.066 5.34848 27.7099 5.34848ZM29.8902 23.6433C29.8902 24.8476 28.9055 25.8748 27.71 25.8748H4.29016C3.09453 25.8748 2.10995 24.8476 2.10995 23.6433V9.66979C2.10995 8.46546 3.09459 7.47373 4.29016 7.47373H7.96491C8.31658 7.47373 8.63306 7.27889 8.82643 6.99555L12.1495 2.14293H19.6924L22.8924 6.96017C23.0858 7.24351 23.4199 7.43835 23.7539 7.43835L27.6924 7.47379C28.888 7.47379 29.8726 8.46559 29.8726 9.66985V23.6433H29.8902V23.6433Z" fill="#808080"/>
<path d="M16.0878 7.89877C11.9559 7.89877 8.61523 11.2815 8.61523 15.4257C8.61523 19.5699 11.9735 22.9525 16.0878 22.9525C20.2021 22.9525 23.5603 19.5699 23.5603 15.4256C23.5603 11.2814 20.2021 7.89877 16.0878 7.89877ZM16.0878 20.8273C13.1339 20.8273 10.7251 18.401 10.7251 15.4256C10.7251 12.4503 13.1339 10.024 16.0878 10.024C19.0416 10.024 21.4505 12.4503 21.4505 15.4256C21.4505 18.401 19.0416 20.8273 16.0878 20.8273Z" fill="#808080"/>
<path d="M26.0919 11.4232C26.3153 11.4232 26.4963 11.2408 26.4963 11.0158C26.4963 10.7908 26.3153 10.6085 26.0919 10.6085C25.8686 10.6085 25.6875 10.7908 25.6875 11.0158C25.6875 11.2408 25.8686 11.4232 26.0919 11.4232Z" fill="#808080"/>
<path d="M26.0922 9.54584C25.2834 9.54584 24.6328 10.2011 24.6328 11.0158C24.6328 11.8305 25.2833 12.4858 26.0922 12.4858C26.901 12.4858 27.5515 11.8305 27.5515 11.0158C27.5515 10.2011 26.9009 9.54584 26.0922 9.54584ZM26.0922 11.6711C25.7229 11.6711 25.4416 11.37 25.4416 11.0158C25.4416 10.6617 25.7406 10.3606 26.0922 10.3606C26.4438 10.3606 26.7427 10.6617 26.7427 11.0158C26.7427 11.37 26.4614 11.6711 26.0922 11.6711Z" fill="#808080"/>
</svg>
</div></div>

        <div class="button-item-options-show btn-show-2" data-itemop="2">Подробнее</div>
        <div class="button-item-options-close btn-close-2" data-itemop="2">Свернуть</div>

        <div class="contforphoto">
          
        </div>

         <div class="group-options group-options-2">
      <div><h5>Размер, см </h5> <div class="line-inner" style="width: 58%;"></div><span class="paramsop paramsop-optionts-2"></span></div>
      <div><h5>Вес, грамм</h5> <div class="line-inner" style="width: 55%;"></div> <span class="paramsop paramsop-optionts-2"></span></div>
      <div><h5>Упаковка, штук</h5> <div class="line-inner" style="width: 55%;"></div><span class="paramsop paramsop-optionts-2"></span> </div>
      <div><h5>Цена, рублей/штука</h5> <div class="line-inner" style="width: 40%"></div><span class="paramsop paramsop-optionts-2"></span></div>
      <div><h5>Оптовые поставки</h5> <div class="line-inner" style="width: 13%;"></div><span class="paramsop paramsop-optionts-2"></span></div>
        </div>

      </div>

   <!--   
      <div class="item-options show-3">
        <p class="title_pptermo5090">П/п + Термообрез (50х90)</p>
        <div class="button-item-options-show btn-show-3" data-itemop="3">Подробнее</div>
        <div class="button-item-options-close btn-close-3" data-itemop="3">Свернуть</div>

        <div class="group-options group-options-3">
      <div><h5>Размер, см </h5> <div class="line-inner" style="width: 58%;"></div><span class="paramsop paramsop-optionts-3"></span></div>
      <div><h5>Вес, грамм</h5> <div class="line-inner" style="width: 55%;"></div><span class="paramsop paramsop-optionts-3"></span></div>
      <div><h5>Упаковка, штук</h5> <div class="line-inner" style="width: 45%;"></div><span class="paramsop paramsop-optionts-3"></span></div>
      <div><h5>Цена, рублей/штука</h5> <div class="line-inner" style="width: 40%"></div><span class="paramsop paramsop-optionts-3"></span></div>
      <div><h5>Оптовые поставки</h5> <div class="line-inner" style="width: 13%;"></div><span class="paramsop paramsop-optionts-3"></span></div>
        </div>


      </div>
      -->
  <!--
      <div class="item-options show-4">
        <p class="title_pptermo55105">П/п Термообрез (55х105)</p>
        <div class="button-item-options-show btn-show-4" data-itemop="4">Подробнее</div>
        <div class="button-item-options-close btn-close-4" data-itemop="4">Свернуть</div>

         <div class="group-options group-options-4">
      <div><h5>Размер, см </h5> <div class="line-inner" style="width: 58%;"></div><span class="paramsop paramsop-optionts-4"></span></div>
      <div><h5>Вес, грамм</h5> <div class="line-inner" style="width: 55%;"></div><span class="paramsop paramsop-optionts-4"></span></div>
      <div><h5>Упаковка, штук</h5> <div class="line-inner" style="width: 45%;"></div><span class="paramsop paramsop-optionts-4"></span></div>
      <div><h5>Цена, рублей/штука</h5> <div class="line-inner" style="width: 40%"></div><span class="paramsop paramsop-optionts-4"></span></div>
      <div><h5>Оптовые поставки</h5> <div class="line-inner" style="width: 13%;"></div><span class="paramsop paramsop-optionts-4"></span></div>
        </div>


      </div>
 -->

  </div>
</div>


</div>


<!---------------------------------------------------------------------------->
<div class="group-product">
 <?php while (($row = $result_set_products->fetch_assoc()) != false): ?>


<?php 

  $result_set_option_pp4575 = $mysqli->query("SELECT * FROM `pp4575`");
  while (($row_pp4575 = $result_set_option_pp4575->fetch_assoc())) {
                   
                if ($row['id_product'] == $row_pp4575['product_id_product']) {
                
                $pp4575 = array('size'=> $row_pp4575['size'], 
                                'weight'=> $row_pp4575['weight'], 
                                'pack' => $row_pp4575['pack'], 
                                'price' => $row_pp4575['price'],
                                'supply' => $row_pp4575['supply'],
                                'title_pp4575' => $row_pp4575['title_pp4575']);
                    }    
              
      }

$result_set_option_pp4575->free();





 $result_set_option_pp_vkladish4675 = $mysqli->query("SELECT * FROM `pp_vkladish4675`");
  while (($row_pp_vkladish4675 = $result_set_option_pp_vkladish4675->fetch_assoc())) {
                   
                if ($row['id_product'] == $row_pp_vkladish4675['product_id_product']) {
                
                $pp_vkladish4675 = array('size'=> $row_pp_vkladish4675['size'], 
                                'weight'=> $row_pp_vkladish4675['weight'], 
                                'pack' => $row_pp_vkladish4675['pack'], 
                                'price' => $row_pp_vkladish4675['price'],
                                'supply' => $row_pp_vkladish4675['supply'],
                                'photo' => $row_pp_vkladish4675['photo'],
                                'title_pp_vkladish4675' => $row_pp_vkladish4675['title_pp_vkladish4675']);
                    }    
              
      }


$result_set_option_pp_vkladish4675->free();




$result_set_option_pptermo5090 = $mysqli->query("SELECT * FROM `pptermo5090`");
  while (($row_pptermo5090 = $result_set_option_pptermo5090->fetch_assoc())) {
                   
                if ($row['id_product'] == $row_pptermo5090['product_id_product']) {
                
                $pptermo5090 = array('size'=> $row_pptermo5090['size'], 
                                'weight'=> $row_pptermo5090['weight'], 
                                'pack' => $row_pptermo5090['pack'], 
                                'price' => $row_pptermo5090['price'],
                                'supply' => $row_pptermo5090['supply'],
                                'title_pptermo5090' => $row_pptermo5090['title_pptermo5090']);
                    }    
              
      }

$result_set_option_pptermo5090->free();




$result_set_option_pptermo55105 = $mysqli->query("SELECT * FROM `pptermo55105`");
  while (($row_pptermo55105 = $result_set_option_pptermo55105->fetch_assoc())) {
                   
                if ($row['id_product'] == $row_pptermo55105['product_id_product']) {
                
                $pptermo55105 = array('size'=> $row_pptermo55105['size'], 
                                'weight'=> $row_pptermo55105['weight'], 
                                'pack' => $row_pptermo55105['pack'], 
                                'price' => $row_pptermo55105['price'],
                                'supply' => $row_pptermo55105['supply'],
                                'title_pptermo55105' => $row_pptermo55105['title_pptermo55105']);
                    }    
              
      }

$result_set_option_pptermo55105->free();




?>




<div class="cont-products">
    <div class="photo-products" style="background-image: url(<?php echo "admin/admin-panel/i/".$row['photo']?>)"></div>

    <div class="title-products">
      <h3><?php echo $row['name_product']?></h3>
    </div>
    <div class="description-products">
      <p><?php echo $row['description_product']?></p>
    </div>
    <div class="btn-cont"><button class="btn-products product_1 aboutprod" data-iproduct= <?= "\"admin/admin-panel/i/".$row['photo']."\""?> data-tproduct=<?= "\"".$row['name_product']."\""?> data-dproduct="Высокое качество и особый способ производства полипропиленовых мешков и биг бэгов позволяют хранить в них товары сельского хозяйства, продукты питания и массу других вещей." data-secphoto="secondphoto_white.png" data-title-1 = <?= "\"".$pp4575['title_pp4575']."\"" ?> data-size-1= <?= "\"".$pp4575['size']."\"" ?> data-weight-1 = <?= "\"".$pp4575['weight']."\"" ?> data-thing-1= <?= "\"".$pp4575['pack']."\"" ?> data-price-1= <?= "\"".$pp4575['price']."\"" ?> data-whole-1=<?= "\"".$pp4575['supply']."\"" ?>  data-title-2= <?= "\"".$pp_vkladish4675['title_pp_vkladish4675']."\"" ?>  data-size-2= <?= "\"".$pp_vkladish4675['size']. "\""?> data-weight-2= <?= "\"".$pp_vkladish4675['weight']."\""?> data-thing-2= <?= "\"".$pp_vkladish4675['pack']."\""?> data-price-2=<?= "\"".$pp_vkladish4675['price']."\""?> data-whole-2=<?= "\"".$pp_vkladish4675['supply']."\""?> data-photovkladish4675 = <?= "\"admin/admin-panel/i/".$pp_vkladish4675['photo']."\"" ?>
     data-title-3 = <?= "\"".$pptermo5090['title_pptermo5090']."\"" ?>  data-size-3=<?= "\"".$pptermo5090['size']."\"" ?> data-weight-3=<?= "\"".$pptermo5090['weight']."\"" ?> data-thing-3=<?= "\"".$pptermo5090['pack']."\"" ?> data-price-3=<?= "\"".$pptermo5090['price']."\"" ?> data-whole-3=<?= "\"".$pptermo5090['supply']."\"" ?>
     data-title-4 = <?= "\"".$pptermo55105['title_pptermo55105']."\"" ?> data-size-4=<?= "\"".$pptermo55105['size']."\"" ?> data-weight-4=<?= "\"".$pptermo55105['weight']."\"" ?> data-thing-4=<?= "\"".$pptermo55105['pack']."\"" ?> data-price-4=<?= "\"".$pptermo55105['price']."\"" ?> data-whole-4=<?= "\"".$pptermo55105['supply']."\"" ?> >подробнее</button></div>
  </div>


<?php endwhile; ?>

</div>

</div>



</section>


<section class="shares frame-cont">


  
<div class="frame-slide-share">
    <div class="viewport-share">


<!--

if (!($photo_share["photo_share".$i] == "" 
              && $title_share["title_share".$i] == "" 
              && $description_share["description_share".$i] == "")) {
-->

  <?php for ($i = 0; $i < $count_share; $i++): ?>

    <?php if (!($arrshare_photo[$i] == "" && $arrshare_title[$i] == "" && $arrshare_description[$i] == "")): ?>
    
    

      <div class="slide-share clearfix">

        <div class="photo-share" style = "background-image: url(admin/admin-panel/edit_section/i/<?=$arrshare_photo[$i]?>)"></div>

        <div class="content-share">
          <h2 class="title-share"><?= $arrshare_title[$i]?></h2>
          <p class="description-share"><?=$arrshare_description[$i]?></p>
        </div>

      </div>

  <?php endif; ?>
  <?php endfor; ?>


   </div>
<div class="slideto-share">
<svg width="100" height="144" viewBox="0 0 100 144" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_d)">
<path d="M0 0H18.3867L57.1713 60H38.7845L0 0Z" transform="translate(20 124) rotate(-90)" fill="#C20000"/>
<path d="M85.6133 0H104L64.0663 60H45.6796L85.6133 0Z" transform="translate(20 124) rotate(-90)" fill="#C20000"/>
</g>
<defs>
<filter id="filter0_d" x="0" y="0" width="100" height="144" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 255 0"/>
<feOffset/>
<feGaussianBlur stdDeviation="10"/>
<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
</filter>
</defs>
</svg>
</div>


</div>

  



</section>


<section class="delivery frame-cont">
	 <div class="frame_delivery">
	 	<div class="wrapper-delivery">
	 	  <div class="delivery-top">
	 	  	   <h2 class="title-delivery-1">С нами удобно!</h2>
	 	  	   <p class="description-delivery-1">Мы осуществляем доставку по Москве и в регионы. Но это еще не все. С нами могут работать как физические, так и юридические лица. Мы так же работаем по наличному и безналичному расчету.</p>
	 	  	   <h2 class="title-delivery-2">Доставка по Москве – бесплатно!</h2>
	 	  	   <p class="description-delivery-2">При заказе от 100 000 рублей – бесплатно, в остальных случаях: 500 руб.</p>
	 	  </div>

	 	  <div class="delivery-bottom">
	 	  	  <p class="title-list">Доставка в регионы транспортными компаниями на Ваш выбор:</p>
	 	  	 
	 	  	<table>
	 	  		<tr>
	 	  			<td>Деловые линии</td>
	 	  			<td>Автотрейдинг</td>
	 	  			<td>Байкал-сервис</td>
	 	  		</tr>
	 	  		<tr>
	 	  			<td>Желдорэкспедиция</td>
	 	  			<td>Грузовозофф</td>
	 	  			<td>ПЭК</td>
	 	  		</tr>
	 	  	</table>
	 	  </div>


	  </div>
	</div>
	 
</section>

<section class="contact frame-cont clearfix">
	  
    <div class="frame_contact">
        <div class="left-contact">
          <div class="contact-cont-left">
          <h2 class="contact-title">Основные контакты</h2>
          <p class="contact-description"><span style="color: #C20000;"><a href="tel:+74957720298" style="color:#C20000; text-decoration: none;">+7 (495) 772-02-98<br></a><a href="mailto:order@hozyajstvennik.ru?subject=order" style="color: #C20000;">order@hozyajstvennik.ru</a></span></p>

        	<h2 class="contact-title">Служба достсавки</h2>
        	<p class="contact-description"><a href="tel:+79260417191" style="color: black; text-decoration: none;">8 (926) 041-7191</a><br><a href="mailto:delivery@hozyajstvennik.ru?subject=Доставка">delivery@hozyajstvennik.ru</a></p>
        	<h2 class="contact-title">Склад</h2>
        	<p class="contact-description"><a href="tel:+79267370754" style="color: black; text-decoration: none;">8 (926) 737-07-54</a></p>
        	<h2 class="contact-title">Адрес cклада</h2>
        	<p class="contact-description">г. Москва, поселение Внуковское, дер.<br>Изварино</p>
        	<h2 class="contact-title">Партнерам</h2>
        	<p class="contact-description"><a href="mailto:partner@hozyajstvennik.ru?subject=Парнеры">partner@hozyajstvennik.ru</a></p>
         </div>
       </div>
        <div class="right-contact">
        <!--	<div id="map"></div> -->
          <div class="mappic"></div>
            <div class="maptoride"><a href="https://yandex.ru/maps/213/moscow/?ll=37.267870%2C55.624356&z=15&mode=search&text=55.624908%2C%2037.263595&sll=37.620905%2C55.753585&sspn=0.008905%2C0.003636">Посмотреть на Яндекс.Картах</a></div>
        </div>
    </div>



	

</section>

</div>

<div class="popup_callback ">
	<div class="close-cover"></div>
	<div class="popup-close"><i class="fa fa-times" aria-hidden="true"></i></div>
	<div class="column-1">
		<div class="cont-callback cont-callback-frame"><p class="title-frame">Обратный вызов</p>
		<div class="group-callback">	
          <p class="title-callback">Введите свой номер телефона и наш менеджер свяжется с вами в ближайшее время</p>
          <div class="group-form">
          	<form method="POST" id = "form-col-1">
          		<input type="tel" name="phone_user" id = "phone" required placeholder="+7 (___) ___-__-__">
              <input type="hidden" name="iscallback" value="true" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" >
          		<button class="btn_sendphone" type="submit">Продолжить</button>
          		 
          	</form>
          </div>
		</div>
	</div>
	</div>
	<div class="column-2">
		<div class="cont-myselfcall cont-callback-frame">
			<p class="title-frame">Связаться<br> самостоятельно<p>
		  <div class="group-myselfcall">
			<p class="title-myselfcall">Позвоните нам по номеру</p>
			<p class="title-myselfcall phone-title">+7 (495) 772-02-98</p>
			<p class="title-myselfcall">или напишите на почту</p>
			
			<!--<p class="title-myselfcall email-title">contact@hozyajstvennik.ru</p>-->
			<div class="group-form-my">
			<form method="POST" class="form-my" id = "form-col-2">
				<input type="name" name="user-name" placeholder="Имя" required>
				<input type="email" name="user-email" placeholder="Электронная почта" required="">
        <textarea placeholder="Ваше сообщение" name = "coments"></textarea>
				<input type="submit" name="send">
        <input type="hidden" name="ismailback" value="true">
      </form>
		</div>
		 </div>
          
		</div>
	</div>
</div>



<script src="scripts/main.js"></script>
</body>
</html>
