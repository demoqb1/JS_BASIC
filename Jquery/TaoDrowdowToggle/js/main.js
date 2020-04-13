
/* 
$(document).ready(function(){
    //Các phương thức jQuery nằm trong này
});
Hoặc cú pháp rút gọn

$(function(){
    //Các phương thức jQuery nằm trong này
});
*/
$(document).ready(function($) {
	$('.ndmotkhoi').slideUp();	
	$('.motkhoi h3').click(function() {
		$(this).next('.ndmotkhoi').slideToggle();
		$(this).toggleClass('mauxanh');

	});
});