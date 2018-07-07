$(document).ready(function(){
$(".btn-sig").on("click", function(){
    $(".popup").fadeIn('slow');
    $(".cover").fadeIn('slow');
});
$(".popup").on("click", function(){
    if($(event.target).is("#close")){
    	$(".popup").fadeOut('slow');
    	$(".cover").fadeOut('slow');
    }
});
})
