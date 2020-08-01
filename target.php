<?php

if(isset($_POST['submit'])){
$to = "as.mrkt.pl@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
$tel = $_POST['tel']; // this is the sender's Email address
$name = $_POST['name'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = "На сайте Таргет в форме =ТАРГЕТ= пользователь $name оставил свой телефон $tel для обратной связи." . "\n\n" . $_POST['message'];
//$message = $name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $tel;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение из формы =ТАРГЕТ= отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='http://test.zamenamasla50.ru/'>Вернуться на сайт.</a>";
}
?>
