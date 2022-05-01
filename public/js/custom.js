// pay//
$('.pay_method').on('click', function () {
    if ($(this).attr('attr') == 'payment_card_Section') {
        $('.payment_card_Section').show();
        $('.e-invoicing_section').removeAttr('style');
    } else {
        $('.payment_card_Section').removeAttr('style');
        $('.e-invoicing_section').show();
    }
});
$('body').on({
    'click': function () {
        $('.th-pop_up').animate({ 'margin-top': '-250%' });
    }
}, '.close');

$('body').on({
    'click': function () {
        $('.th-pop_up').show().animate({ 'margin-top': '0px' });
    }
}, '.pop_up_con .su_button');


$(document).ready(function () {
    repeted();
    function repeted(){
        x = 1;
        u = 0;
        var classes = $('.flickity-page-dots li').map(function () {
            $(this).attr('id', 'do'+u);
            u++;
            return $(this).attr('id');
        });
        setInterval(function () {
            if (classes.length == x) {
                repeted();
            }
            $('.put').trigger('click');
            console.log(classes[x]);
            x++;
        }, 3000);
    };

    $(".put").on('click',function(){
        // alert('set');
    })
})



