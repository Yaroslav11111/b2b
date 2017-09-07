
$('document').ready(function () {
    $('.store_cell').click(
        function () {
            $('.store_info').css({'display' : 'none'})
            $(this).children('.store_info').css({'display' : 'block'})
        }

    )
    $('.bx_filter_title').click(
        function () {
            $('.smartfilter').toggleClass('open_filter');
            $('.fa-chevron-down').toggleClass('hidden');
            $('.fa-chevron-up').toggleClass('hidden');
        }
    )

})
$(document).click( function(event){
    if( $(event.target).closest(".store_cell").length )
        return;
    $(".store_info").css({'display' : 'none'});
    event.stopPropagation();
});

01
$(document).ready(function(){
    var intervalID;
    $(".product_name").hover(
    function () {
        var popup = jQuery(this).find(".img_product");
        intervalID=setTimeout(
        function() {
            popup.fadeIn();
        }, 500);
    },
    function () {
        $(".img_product").fadeOut();
        clearInterval(intervalID);
    }
    );
});
