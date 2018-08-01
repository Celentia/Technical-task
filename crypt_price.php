<?php 
									$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
									$exp=preg_split('/({[\s]+"hour":|[\s,]+"day)/',$html);
									echo '<p class="taken_price_percent">'.$exp[4].'</p>';
								?>
								<?php
									$html1 = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD');
									$exp1=preg_split('/(day":|[\s,]+"week)/',$html1);
									echo '<p class="taken_price_percent">'.$exp1[5].'</p>';
								?>	
								<?php
									$html2 = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD');
									$exp2=preg_split('/(week":|[\s,]+"month)/',$html2);
									echo '<p class="taken_price_percent">'.$exp2[7].'</p>';
								?>
								<?php
									$html3 = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD');
									$exp3=preg_split('/(month":|[\s,]+"month_3)/',$html3);
									echo '<p class="taken_price_percent">'.$exp3[4].'</p>';
								?> 

								<?php 
									$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
									$exp=preg_split('/(hour":|[\s,]+"day)/',$html);
									echo '<p class="taken_price">'.$exp[1].'</p>';
								?>
								
								<?php 
									$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
									$exp=preg_split('/(day":|[\s,]+"week)/',$html);
									echo '<p class="taken_price">'.$exp[1].'</p>';
								?>
								
								<?php 
									$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
									$exp=preg_split('/(week":|[\s,]+"month)/',$html);
									echo '<p class="taken_price">'.$exp[1].'</p>';
								?>
								
								<?php 
									$html = file_get_contents('https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD'); 
									$exp=preg_split('/(month":|[\s,]+"month_3)/',$html);
									echo '<p class="taken_price">'.$exp[1].'</p>';
								?>