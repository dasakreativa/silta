(function ($) {
    "use strict";

    $('[data-toggle="tooltip"]').tooltip();

    $.clocker = ($target, $html = '') => {
        var months = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        var days = [
            'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        ];

        function update() {
            var date = new Date();

            var hours = date.getHours() < 10 ?
                '0' + date.getHours() :
                date.getHours();

            var minutes = date.getMinutes() < 10 ?
                '0' + date.getMinutes() :
                date.getMinutes();

            var seconds = date.getSeconds() < 10 ?
                '0' + date.getSeconds() :
                date.getSeconds();

            var dayOfWeek = days[date.getDay()];
            var month = months[date.getMonth()];
            var day = date.getDate();
            var year = date.getFullYear();

            var dateString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year,
                clock = hours + ' : ' + minutes + ' : ' + seconds;

            $($target).html(`${$html}<span class="text-monospace">${clock}</span>`);

        }

        update();
        window.setInterval(update, 1000);
    };

    $.clocker('#clock');
    $.clocker('#clockwrap', '<span class="mr-2 d-none d-lg-inline d-md-none">Sekarang Jam</span>');

    $('.btn-toggler').click(() => {
        $('body').toggleClass('toggled');
    });

    $(document).on('click', '.mega-menu .dropdown-menu', function(e) {
        e.preventDefault();
        e.stopProopagation();

        $(this).parent().toggleClass('open');
        return false;
    });

    $(document).ready(function () {
        $('.sidebar-menu').metisMenu({

            // enabled/disable the auto collapse.
            toggle: true,

            // prevent default event
            preventDefault: true,

            // default classes
            activeClass: 'active',
            collapseClass: 'collapse',
            collapseInClass: 'show',
            collapsingClass: 'collapsing',

            // .nav-link for Bootstrap 4
            triggerElement: 'a',

            // .nav-item for Bootstrap 4
            parentTrigger: 'li',

            // .nav.flex-column for Bootstrap 4
            subMenu: 'ul'

        });
    });
    
    jQuery(document).ready(function(){
        jQuery('.scrollbar-macosx').scrollbar();
    });
})(jQuery);