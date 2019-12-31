/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
	
	// hiệu ứng đăng ký thành công
    $("#mess-insert").delay(3000).fadeOut();
	
	//
	checkUserName();
});

// Process ajax check name
function checkUserName()
{
	$(document).on('keyup','#txtNameRegister',function(){
		var val=$(this).val();
		//$('#mess-Name-Register').html(val);
		$.ajax({
			url:"ajax/checkUserName",
			method:"POST",
			dataType:"JSON",
			data:{
				UserName:val
			},
			success:function(result)
			{
				if(result > 0)
				{
					$('#mess-Name-Register').text('You enter existing data !!');
				}
				else
				{
					$('#mess-Name-Register').text('');
				}
			}
		});
	});
}
