jQuery(function ($) {
    $(window).on('load2 scroll', function () {
        var windowHeight = $(window).height(),
            scrollTop = $(window).scrollTop();
        $('.animate .zoom, .animate .slide-top, .animate .spinner').filter(':not(.in)').each(function () {
            var top = $(this).offset().top,
                bottom = top + $(this).height(),
                scrollBottom = scrollTop + windowHeight;
            if (top > scrollTop && top < scrollBottom || bottom > scrollTop && bottom < scrollBottom) {
                $(this).addClass('in');
            }
        });
        $('#scroll-top').toggleClass('in', scrollTop > windowHeight / 2);
    });

    /*$('#screen-2 .show-all').on('click', function () {
        $('#screen-2 .hidden-boxes').slideDown(200);
        $(this).slideUp(200);
        return false;
    });*/

    $(window).on('load2 resize', function () {
        $(".box").equalHeight();
        $(".box-2").equalHeight();
        $(".s-6-cont").equalHeight();
    });

    $(window).trigger('load2');

    $('.phone-mask').mask('+7 (999) 999-99-99');

    /*$('.modal').on('shown.bs.modal', function () {
        var $dialog = $(this).find('.modal-dialog');
        $dialog.css('transform', 'translateY(' + Math.round(($(window).height() - $dialog.height()) / 2) + 'px)');
    });*/

    $('#consult, #consult-inline')
        .on('show.bs.modal', function (e) {
            $(this).find('form')[0].reset();
            $(this).removeClass('loading');
        })
        .on('submit', 'form', function (e) {
            var $this = $(this),
                $modal = $this.parents('.modal').addClass('loading');

            yaCounter45587322.reachGoal('ORDER');

            $.ajax({
                url: '/',
                type: 'POST',
                dataType: 'json',
                data: $this.serialize(),
                success: function (data) {
                    var $alert = $('#alert-message')
                        .toggleClass('alert-danger', data.error)
                        .toggleClass('alert-success', !data.error)
                        .html(data.message)
                        .fadeIn(100);

                    setTimeout(function () {
                        $alert.fadeOut(500);
                    }, 5000);

                    $this[0].reset();
                    $modal.modal('hide');
                }
            });
            e.preventDefault();
        });
});