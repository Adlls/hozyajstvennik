<?php


$mailto = "order@hozyajstvennik.ru";
$sitename = "хозяйственник1.рф";

$name = trim($_POST["user-name"]);
$email = trim($_POST["user-email"]);
$com = trim($_POST["coments"]);
$phone = trim($_POST["phone_user"]);

$message_mailback = " Имя: $name \n Почта: $email \n Комментарий: $com";
$message_callback = "Телефон для обратного звонка: $phone";
$pagetitle = "Заявка с сайта \"$sitename\" ";




if (isset($_POST["ismailback"])) {
     mail($mailto, $pagetitle, $message_mailback, "Content-type: text/plain; charset=\"utf-8\"\n From: $mailto");
}

if (isset($_POST["iscallback"])) {
  mail($mailto, $pagetitle, $message_callback, "Content-type: text/plain; charset=\"utf-8\"\n From: $mailto");
}


include("admin/admin-panel/database.php");

$mysqli->query("INSERT INTO lids(phone, name, email, comment) VALUES ('".$_POST["phone_user"]."', '".$_POST["user-name"]."', '".$_POST["user-email"]."', '".$_POST["coments"]."');");

$mysqli->close();

?>