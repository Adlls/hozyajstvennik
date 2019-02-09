<?php
include('admin/admin-panel/database.php');

$result_set = $mysqli->query("SELECT * FROM `header_section`");

  $title_header = "";
  $promo_header = "";
  $description_header = "";
  $result_set_products = $mysqli->query("SELECT * FROM `product`");
  $result_set_ppvkladish = $mysqli->query("SELECT * FROM `pp_vkladish4675`");


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

	</div>
      <div class="menu-mo">
      <div class="menu-list">
        <ul>
      <li id="frame-products"> Товары </li>
      <li id="frame-shares"> Акции </li>
			<li id="frame-delivery"> Доставка </li>
			<li id="frame-contact"> Контакты </li>
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
     <?php while (($row = $result_set_ppvkladish->fetch_assoc()) != false): ?>
      <div class="item-options show-2" data-idproduct= <?="\"".$row['product_id_product']."\"" ?>>
        <p class="title_ppvk4675"><?= $row['title_pp_vkladish4675'] ?></p>
        <div class="contfordelt"><div class="photo-item-options" data-itemop="2"> <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.7099 5.34848L24.3516 5.33079L21.1341 0.495869C20.9406 0.194772 20.6066 0 20.2549 0H11.5868C11.2352 0 10.9187 0.194835 10.7253 0.478179L7.40225 5.33079L4.29016 5.34848C1.93409 5.34848 0 7.29664 0 9.66979V23.6433C0 26.0165 1.93409 28 4.29009 28H27.7099C30.066 28 32 26.0165 32 23.6433V9.66979C32.0001 7.29664 30.066 5.34848 27.7099 5.34848ZM29.8902 23.6433C29.8902 24.8476 28.9055 25.8748 27.71 25.8748H4.29016C3.09453 25.8748 2.10995 24.8476 2.10995 23.6433V9.66979C2.10995 8.46546 3.09459 7.47373 4.29016 7.47373H7.96491C8.31658 7.47373 8.63306 7.27889 8.82643 6.99555L12.1495 2.14293H19.6924L22.8924 6.96017C23.0858 7.24351 23.4199 7.43835 23.7539 7.43835L27.6924 7.47379C28.888 7.47379 29.8726 8.46559 29.8726 9.66985V23.6433H29.8902V23.6433Z" fill="#808080"/>
<path d="M16.0878 7.89877C11.9559 7.89877 8.61523 11.2815 8.61523 15.4257C8.61523 19.5699 11.9735 22.9525 16.0878 22.9525C20.2021 22.9525 23.5603 19.5699 23.5603 15.4256C23.5603 11.2814 20.2021 7.89877 16.0878 7.89877ZM16.0878 20.8273C13.1339 20.8273 10.7251 18.401 10.7251 15.4256C10.7251 12.4503 13.1339 10.024 16.0878 10.024C19.0416 10.024 21.4505 12.4503 21.4505 15.4256C21.4505 18.401 19.0416 20.8273 16.0878 20.8273Z" fill="#808080"/>
<path d="M26.0919 11.4232C26.3153 11.4232 26.4963 11.2408 26.4963 11.0158C26.4963 10.7908 26.3153 10.6085 26.0919 10.6085C25.8686 10.6085 25.6875 10.7908 25.6875 11.0158C25.6875 11.2408 25.8686 11.4232 26.0919 11.4232Z" fill="#808080"/>
<path d="M26.0922 9.54584C25.2834 9.54584 24.6328 10.2011 24.6328 11.0158C24.6328 11.8305 25.2833 12.4858 26.0922 12.4858C26.901 12.4858 27.5515 11.8305 27.5515 11.0158C27.5515 10.2011 26.9009 9.54584 26.0922 9.54584ZM26.0922 11.6711C25.7229 11.6711 25.4416 11.37 25.4416 11.0158C25.4416 10.6617 25.7406 10.3606 26.0922 10.3606C26.4438 10.3606 26.7427 10.6617 26.7427 11.0158C26.7427 11.37 26.4614 11.6711 26.0922 11.6711Z" fill="#808080"/>
</svg>
</div>
</div>

        <div class="button-item-options-show btn-show-2" data-itemop="2">Подробнее</div>
        <div class="button-item-options-close btn-close-2" data-itemop="2">Свернуть</div>

      
        <div class="contforphoto" data-secph=<?="\"".$row['photo']."\"" ?> ></div>
  
         <div class="group-options group-options-2">
      <div><h5>Размер, см </h5> <div class="line-inner" style="width: 58%;"></div><span class="paramsop paramsop-optionts-2"><?= $row['size'] ?></span></div>
      <div><h5>Вес, грамм</h5> <div class="line-inner" style="width: 55%;"></div> <span class="paramsop paramsop-optionts-2"><?= $row['weight'] ?></span></div>
      <div><h5>Упаковка, штук</h5> <div class="line-inner" style="width: 55%;"></div><span class="paramsop paramsop-optionts-2"><?= $row['pack'] ?></span></div>
      <div><h5>Цена, рублей/штука</h5> <div class="line-inner" style="width: 40%"></div><span class="paramsop paramsop-optionts-2"><?= $row['price'] ?></span></div>
      <div><h5>Оптовые поставки</h5> <div class="line-inner" style="width: 13%;"></div><span class="paramsop paramsop-optionts-2"><?= $row['supply'] ?></span></div>
        </div>
      
      </div>
      <?php endwhile; ?>
  </div>
</div>
        

</div>



<div class="group-product">

<?php while (($row = $result_set_products->fetch_assoc()) != false): ?>

<div class="cont-products">

      <div class="photo-products" style="background-image: url(<?php echo "admin/admin-panel/i/".$row['photo']?>)"></div>

     <div class="title-products">
      <h3><?php echo $row['name_product']?></h3>
    </div>
    <div class="description-products">
      <p><?php echo $row['description_product']?></p>
    </div>

    
    <div class="btn-cont"><button class="btn-products product_1 aboutprod" data-iproduct= <?= "\"admin/admin-panel/i/".$row['photo']."\""?> data-tproduct=<?= "\"".$row['name_product']."\""?> data-idproduct= <?="\"".$row['id_product']."\"" ?> >подробнее</button></div>

  
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
