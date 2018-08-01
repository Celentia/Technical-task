<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="dist/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link href="js/jQueryFormStyler-master/dist/jquery.formstyler.css" rel="stylesheet" />
	<link href="js/jQueryFormStyler-master/dist/jquery.formstyler.theme.css" rel="stylesheet" /> 
</head>
<body>
	<div class="wrapper">
		<div class="select">
			<p>Select currency to exhange:</p>
			<div class="menu">
				<select name="" id="dropbox">
					<option value="">usd</option>
					<option value="">eur</option>
					<option value="">rub</option>
					<option value="">gbp</option>
				</select>
				<div class="arrow"></div>
			</div>
		</div>
		<div class="main">
			<div class="crypt">
				<img src="img/ethereum.png" alt="">
				<div class="crypt_inner">
					<p class="crypt_title">Ethereum</p>
					<div class="crypt_inner_bottom">
						<div class="crypt_inner_flex">
							<div class="group_left">
								<p class="price">Price:</p>
								<p class="percent_change">Percent change:</p> 
								<p class="time_change">Hour change:</p> 
								<p class="time_change">Day change:</p>
								<p class="time_change">Week change:</p>
								<p class="time_change">Month change:</p>
							</div>
							<div class="group_right">
								<?php include 'crypt_price_main.php'; ?>
								<p class="switchery switchery-small" id="switch1"><small id="switchSmall1"></small></p>
								<?php include 'crypt_price.php'; ?>	
							</div>
							</div>
						</div>
					</div>
				</div>
			<div class="crypt">
				<img src="img/litecoin.png" alt="">
				<div class="crypt_inner">
					<p class="crypt_title">Litecoin</p>
					<div class="crypt_inner_bottom">
						<div class="crypt_inner_flex">
							<div class="group_left">
								<p class="price">Price:</p>
								<p class="percent_change">Percent change:</p> 
								<p class="time_change">Hour change:</p> 
								<p class="time_change">Day change:</p>
								<p class="time_change">Week change:</p>
								<p class="time_change">Month change:</p>
							</div>
							<div class="group_right">
								<?php include 'crypt_price_main.php'; ?>
								<p class="switchery switchery-small" id="switch2"><small id="switchSmall2"></small></p>
								<?php include 'crypt_price1.php'; ?>	
							</div>
							</div>
						</div>
					</div>
			</div>
			<div class="crypt">
				<img src="img/bitcoin.png" alt="">
				<div class="crypt_inner">
					<p class="crypt_title">Bitcoin</p>
					<div class="crypt_inner_bottom">	
						<div class="crypt_inner_flex">
							<div class="group_left">
								<p class="price">Price:</p>
								<p class="percent_change">Percent change:</p> 
								<p class="time_change">Hour change:</p> 
								<p class="time_change">Day change:</p>
								<p class="time_change">Week change:</p>
								<p class="time_change">Month change:</p>
							</div>
								<div class="group_right">
								<?php include 'crypt_price_main.php'; ?>
								<p class="switchery switchery-small" id="switch3"><small id="switchSmall3"></small></p>
								<?php include 'crypt_price2.php'; ?>	
							</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
<script src="js/jQueryFormStyler-master/dist/jquery.formstyler.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>