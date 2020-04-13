
/* 
$(document).ready(function(){
    //Các phương thức jQuery nằm trong này
});
Hoặc cú pháp rút gọn

$(function(){
    //Các phương thức jQuery nằm trong này
});
*/
$(function() {

			$('span a').click(function(event) {
				//$(selector).action();
				$('#dangnhap').animate({opacity :0,marginLeft :-1000});
				$('#dangki').animate({opacity :1,marginLeft :0});



		});
});		
