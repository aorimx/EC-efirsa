$(document).ready(function(){
    $('.hmenu').click(function(){
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else{
            $(this).removeClass('active');
        }

    });
})