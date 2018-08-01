<?php 
	$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
	$exp=preg_split('/(last":|[\s,]+"high)/',$html);
	echo '<p class="taken_price_main">'.$exp[1].'</p>';
?>