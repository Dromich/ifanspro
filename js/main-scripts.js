$(function() {
  // Owl Carousel
  var owl = $("#testimonail-photo");
  owl.owlCarousel({
    items: 3,
    margin: 10,
    dots: true,
	nav : false,
    pagination : true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
	loop:true,
	responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
		769:{
            items:3,
        }
    }
  });
});

$(document).ready(function(){
	$(".block-scroll").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top - 75}, 1000);
	});
});

$(document).ready(function(){
  
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
        });
          
        $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
  
});

/* ---------- #gall ----------- */
$(document).ready(function () {
  $(".gallery-img").click(function(){
    var t = $(this).attr("src");
    $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
    $("#myModal").modal();
  });
});
/* ---------- #gall ----------- */

/* ---------- #exitblock ----------- */
$(document).mouseleave(function(e){
    if (e.clientY < 100) {
        $(".exitblock").fadeIn("fast");
    }    
});
$(document).click(function(e) {
    if (($(".exitblock").is(':visible')) && (!$(e.target).closest(".exitblock .modaltext").length)) {
        $(".exitblock").remove();
    }
});
/* ---------- #exitblock ----------- */
