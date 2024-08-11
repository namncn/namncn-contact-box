(function ($) {
    'use strict';

    $('#contact-box > .container').click(function(){
        $('#contact-box > .popup').toggle();
    });

    $(window).on('keyup', function (e) {
        if (e.key === 'Escape') {
            $('#contact-box > .popup').hide();
        }
    });
})(jQuery);
