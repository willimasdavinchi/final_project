/*   ---   Smooth scroller   ---   */
function myFunction() {
  var javavanilla = document.getElementById('galeriaref');
  javavanilla.classList.add("hidden");
}
/*   ---   hidden effect   ---   */
$( document ).ready(function() {
	$(window).width(function(){
		if ($(window).width() <= 990) {  
			$("source").attr("src","wp-content/assets/video/background_mobile.mp4");
		}     
	});
	$(document).on('scroll', function(){
		$('.hidden').each(function(){
			if(isScrolledIntoView($(this))){
        var _this = this
			  setTimeout(function() {
          $(_this).removeClass('hidden').addClass("visible");
        }, 250);
        
			}
		});
	});
/*   ---   video animation and button   ---   */
	$(function(){
		$(".introheader__expandbutton").on("click", function(){
			var muted = $("video").prop("muted");
			$("video").prop("muted", muted==false);
			$(".fa-angle-double-down").toggleClass("fa-angle-double-up");
			$(".introheader__control").toggleClass("introheader__control--active");
			$(".introheader__controlvideo").toggleClass("introheader__controlvideo--active");

			$("body").toggleClass("body--active");
			$(".introheader").toggleClass("introheader--active");
			$(".introheader__text").toggleClass("introheader__text--active");
			$(".background__video").toggleClass("background__video--active");
		})
/*   ---   mouse over animation   ---   */
	});

	$(".main__button").mouseover(function() {
		$("img", this).addClass("main__buttonimg--active");
		$(".main__buttontext", this).addClass("main__buttontext--active");
	}).mouseout(function() {
		$(".main__buttontext").removeClass("main__buttontext--active");
		$("img").removeClass("main__buttonimg--active");
	});
/*   ---   show effect   ---   */
	function isScrolledIntoView(elem)
	{
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();
		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}
});
/*   ---   API   ---   */
var rates = {}
$(function() {
  $.ajax({
    method: 'GET',
    url: 'https://mindicador.cl/api'
  }).then(function(data) {
  	rates = data;
    $('.indicador.usd').html(rates.dolar.valor);
    $('.indicador.euro').html(rates.euro.valor);
    $('.indicador.UF').html(rates.uf.valor);
    $('.indicador.UTM').html(rates.utm.valor);
  })
  	$('#value').keyup(function(event) {
  		data = $.trim($("#value").val());
  		$('.exchange.usd').html(data / rates.dolar.valor);
  		$('.exchange.euro').html(data / rates.euro.valor);
  		$('.exchange.UF').html(data / rates.uf.valor);
  		$('.exchange.UTM').html(data / rates.utm.valor);
var value_min = 299999;
if (data <= value_min) {  
	$('.api_text').html('No eres Mercedes-Benz');
	$(".api_image").attr("src","https://nnimgt-a.akamaihd.net/transform/v1/crop/frm/pLj4pq4ybq6tTvnKybAXAX/58c1e3ce-7bc2-40ef-9465-dfb4336e5092.jpg/r0_94_5315_3519_w1200_h678_fmax.jpg");
};
var value_canter = 300000;
if (data >= value_canter) {  
	$('.api_text').html('Eres un <strong>Canter</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2017/08/Canter4134X2EURO5.jpg");
};
var value_a200 = 500000;
if (data >= value_a200) {  
	$('.api_text').html('Eres un <strong>A200</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2018/07/banner-clase-A-20180724.jpg");
};
var value_gla = 700000;
if (data >= value_gla) {  
	$('.api_text').html('Eres un <strong>GLA</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2018/07/clase_gla.jpg");
};
var value_slc = 900000;
if (data >= value_slc) {  
	$('.api_text').html('Eres un <strong>SLC</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2018/10/clase-slc.jpg");
};
var value_amg = 1200000;
if (data >= value_amg) {  
	$('.api_text').html('Eres un <strong>AMG</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2016/10/C-coup%C3%A9-63-AMG.jpg");
};
var value_arocs = 1500000;
if (data >= value_arocs) {  
	$('.api_text').html('Eres un <strong>Arocs</strong>');
	$(".api_image").attr("src","http://www.kaufmann.cl/wp-content/uploads/2019/02/AROCS-1.jpg");
};
  	})
});

