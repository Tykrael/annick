
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
		$('.rules').on('click',function(){
			$('.contest').show();
		})

		if($('.invitationForm').find('.errorMessage').length){
			$('.invitationForm').show();
		}
		
		$('.arrow-left').on('click',function(e){mySwiper.swipePrev()});
		$('.arrow-right').on('click',function(e){mySwiper.swipeNext()});
}

$(document).ready(function(){
	console.log('flashMessage',$('.flashMessage').length)
	if(!$('.invitationForm').find('.errorMessage').length && !$('.flashMessage').length ){
		$(".door-right").on('animationend webkitAnimationEnd', function(e){
				$('.door').hide();
				$('body').css('overflow','auto');
		});
	}else{
		$('.door').remove();
		$('body').css('overflow','auto');
	}
	if($('.flashMessage.popin').length){
		$('.flashMessage.popin').show()
		setTimeout(function(){
			$('.flashMessage.popin').remove();
		},3000);
	}
	




})