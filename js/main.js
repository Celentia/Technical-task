$("option").each(function() {
  $(this).text($(this).text().toUpperCase());
});
(function($) {
$(function() {

  $('input, select').styler();

});
})(jQuery);

$('#switch1').on('click', f_acc1);
function f_acc1(){
    $('#switch1').toggleClass('switchOn');
    $('#switchSmall1').toggleClass('switchOnSmall');
    $('.taken_price_percent').toggleClass('open');
    $('.taken_price').toggleClass("close");
    for(var i = 0; i < 4; i++) {
    	if ($('.taken_price_percent').eq(i).text().indexOf('-') > -1) {
    	$('.taken_price_percent').eq(i).css({'color':'red'});
    }
    else $('.taken_price_percent').eq(i).css({'color':'#70c446'});
    }
}
$('#switch2').on('click', f_acc2);
function f_acc2(){
    $('#switch2').toggleClass('switchOn');
    $('#switchSmall2').toggleClass('switchOnSmall');
    $('.taken_price_percent1').toggleClass('open');
    $('.taken_price1').toggleClass("close");
    for(var i = 0; i < 4; i++) {
    	if ($('.taken_price_percent1').eq(i).text().indexOf('-') > -1) {
    	$('.taken_price_percent1').eq(i).css({'color':'red'});
    }
    else $('.taken_price_percent1').eq(i).css({'color':'#70c446'});
    }
}
$('#switch3').on('click', f_acc3);
function f_acc3(){
    $('#switch3').toggleClass('switchOn');
    $('#switchSmall3').toggleClass('switchOnSmall');
    $('.taken_price_percent2').toggleClass('open');
    $('.taken_price2').toggleClass("close");
    for(var i = 0; i < 4; i++) {
    	if ($('.taken_price_percent2').eq(i).text().indexOf('-') > -1) {
    	$('.taken_price_percent2').eq(i).css({'color':'red'});
    }
    else $('.taken_price_percent2').eq(i).css({'color':'#70c446'});
    }
}
var price = +$('.taken_price_main').eq(0).text();
$('select').change(function() {
	if ($("option:selected").prop('text')=='USD') {
		$('.taken_price_main').text((price*1).toFixed());
	}
	if ($("option:selected").prop('text')=='EUR') {
		$('.taken_price_main').text((price*0.8578).toFixed());
	}
	if ($("option:selected").prop('text')=='RUB') {
		$('.taken_price_main').text((price*62.7808).toFixed());
	}
	if ($("option:selected").prop('text')=='GBP') {
		$('.taken_price_main').text((price*0.7633).toFixed());
	}
})
