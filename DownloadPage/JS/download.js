$('.b_accordion-header-wrap').on('click', function() {
    if ($(this).hasClass('b_accordion-header-open')) {
        console.log('hat schon!')
        $(this).removeClass('b_accordion-header-open');
    }
    else {
        $('.b_accordion-header-wrap').removeClass('b_accordion-header-open')
        $(this).addClass('b_accordion-header-open');
    }
});