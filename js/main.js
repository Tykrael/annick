
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
		$('.flashMessage.popin .content').append('<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6012889650366&amp;value=0.01&amp;currency=EUR" /></noscript>');
		setTimeout(function(){
			$('.flashMessage.popin').hide();
		},3000);
	}

	var uri = parseUri(document.URL);
	if(uri.anchor == 'subscribe'){
		$('.door').remove();
		$('body').css('overflow','auto');
		$('.invitationForm').show();
	}
})