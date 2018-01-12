(function ($) {
    $.fn.equalHeight = function () {
        if (!this.length) {
            return this;
        }
        this.css('height', 'auto');
        var sets = {};
        this.each(function () {
            var pos = $(this).offset().top;
            if (!sets[pos]) {
                sets[pos] = [];
            }
            sets[pos].push(this);
        });
        $.each(sets, function(pos, items) {
            if (items.length < 2) {
                return true;
            }
            var maxHeight = null, i;
            for(i = 0; i < items.length; i++) {
                var height = $(items[i]).innerHeight();
                if (maxHeight === null || height > maxHeight) {
                    maxHeight = height;
                }
            }
            for(i = 0; i < items.length; i++) {
                $(items[i]).css('height', maxHeight + 'px');
            }
        });
        return this;
    };
})(jQuery);

(function ($) {
    $.extend({
        browser: {
            msie: false,
            version: 0
        }
    });
})(jQuery);