// pay//
$('.pay_method').on('click',function(){
    if($(this).attr('attr') == 'payment_card_Section'){
        $('.payment_card_Section').show();
        $('.e-invoicing_section').removeAttr('style');
    }else{
        $('.payment_card_Section').removeAttr('style');
        $('.e-invoicing_section').show();
    }
});
$('body').on({
    'click': function() {
    $('.th-pop_up').animate({'margin-top':'-250%'});
    }
},'.close');

$('body').on({
    'click': function() {
    $('.th-pop_up').show().animate({'margin-top':'0px'});
    }
},'.pop_up_con .su_button');