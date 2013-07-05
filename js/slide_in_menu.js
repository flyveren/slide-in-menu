// JavaScript Document

$( document ).ready(function() {
	
//menu set z-index	
	$('#site-navigation.main-navigation').css('position','absolute');
	$('#site-navigation.main-navigation').css('z-index','-10');
	$('.main-navigation li').css('display','list-item');
	$('#page.hfeed.site').css('z-index','999');
	$('#page.hfeed.site').css('overflow','visible');

//define button
	$(".wrapper").append("<div id='knap'></div>");
	$('#knap').css('width','45px');
	$('#knap').css('height','30px');
	$('#knap').css('margin-left','-40px');
	$('#knap').css('margin-top','-120px');
	$('#knap').css('background-color','red');

var $knapfunktion = 1;

//menu float ind out
$("#knap").click(function () {
	if($knapfunktion == 0){
	$('#page').css('position','relative');
	$('#page').css('left','0px');
	$('#site-navigation.main-navigation').css('margin-left','0px');
		$('#site-navigation.main-navigation').css('visibility','hidden');
	$knapfunktion = 1;
	}else{
	$('#page').css('position','relative');
	$('#page').css('left','150px');
	$('#site-navigation.main-navigation').css('margin-left','-150px');
	$('#site-navigation.main-navigation').css('visibility','visible');
	$knapfunktion = 0;
	}
});


});