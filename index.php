<?php

// Занесение параметров в массив
$array = array (

$amount = 15,
$payment = 10,
$shop = 1283,
$currency = 'RUB',
$desc = 'Название товара',
$secret = 'c5f972d54bf3e1137b31cf86912193f8' //Ваш секретный ключ

);

// Соединение массива в строку и хеширование функцией md5
$sign = md5 ( implode ( '|', $array ) );

?>

<form action='https://payok.io/pay' method= 'POST'>

<input type='hidden' name= 'amount' value= "<?php echo $amount; ?>">
<input type='hidden' name= 'payment' value= "<?php echo $payment; ?>">
<input type='hidden' name= 'shop' value= "<?php echo $shop; ?>">
<input type='hidden' name= 'currency' value= "<?php echo $currency; ?>">
<input type='hidden' name= 'desc' value= "<?php echo $desc; ?>">
<input type='hidden' name= 'email' value= 'test@payok.io' >
<input type='hidden' name= 'method' value= 'card' >
<input type='hidden' name= 'sign' value= "<?php echo $sign; ?>">
<input type='submit' value='Купить'>

</form> 