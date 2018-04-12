(function($, document, window) {
    tinymce.create( 'tinymce.plugins.co_do_short_code', {
        init: function (ed, url) {
            var t = this;
            var re;
            var res = $.ajax({
                type: 'POST',
                url: ajaxurl,
                dataType: 'json',
                data: {
                    'action': 'response_path'
                },
                async: false
            }).responseJSON;

            ed.onBeforeSetContent.add(function(ed, o) {
                o.content = t._do_code(o.content, res);
            });

            ed.onPostProcess.add(function(ed, o) {
                if (o.get) {
                    o.content = t._get_code(o.content, res);
                }
            });
        },
        _do_code: function(co, res) {
            var tmp = co.replace(/<img\s(.*?\[image_path\spath='.*?'].*?)>/g, function(a, b) {
                var src, cl, alt, r, u = res.image_path;
                if (b.match(/class=/)) {
                    cl = b.replace(/.*?class=\"(.*?)\".*/, "class=\"$1 co-image-path\"" );
                } else {
                    cl = "class=\"co-image-path\"";
                }
                if (b.match(/alt=/)) {
                    alt = b.replace(/.*?alt=\"(.*?)\".*/, "alt=\"$1\"" );
                } else {
                    alt = "alt=\"\""
                }
                if(b.match(/path='(.*?)'/)) {
                    r   = b.replace(/.*?path=\'(.*?)\']\".*/, "$1");

                    src = tinymce.baseURL.replace(/(.+?)wp-includes\/js\/tinymce/i, u + r);
                } else {
                    src = '';
                }

                str = "<img src=\"" + src + "\"" + cl + alt + ">";
                return str;
            });

            return tmp;
        },
        _get_code : function(co, res) {
            var u = res.image_path;

            str = tinymce.baseURL.replace(/(.+?)wp-includes\/js\/tinymce/i, u);

            reg = new RegExp('<img(.*?)src=\"(' + res.image_path + ')(.*?)\"(.*?)>', 'g');

            var tmp = co.replace(reg, function( a, b, c, d, e ) {
                if ( c != "")
                    return '<img src="[image_path path=\'' + d + '\']"' + e.replace(/co-image-path/, '') + '>';

                return a;
            });

            return tmp;
        }
    });
    tinymce.PluginManager.add( 'co_do_short_code', tinymce.plugins.co_do_short_code);
})(jQuery, document, window);