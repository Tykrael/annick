
window.onload = function(){

		var mySwiper = new Swiper('.swiper-container',{
			loop:true,
			pagination: '.pagination',
			paginationClickable: true,
			calculateHeight:true,
			autoplay: 5000,

			onSlideChangeStart : function(swiper){
				$('.slider').toggleClass('motif')	
			}

		})


		$('.button').on('click',function(){
			$('.invitationForm').show();
		})

		$('.closePopin, .popin .mask').on('click',function(){
			$('.popin').hide();
		})
		$('.legalsLink').on('click',function(){
			$('.legals').show();
		})
		
		$('.arrow-left').click(function(e){mySwiper.swipePrev()});
		$('.arrow-right').click(function(e){mySwiper.swipeNext()});
}

$(document).ready(function(){

		$(".door-right").on('animationend webkitAnimationEnd', function(e){

			$('.door').hide()
			$('body').css('overflow','auto')

		});
})